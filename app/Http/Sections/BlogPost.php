<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\DisplayInterface;
use SleepingOwl\Admin\Contracts\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class BlogPost
 *
 * @property \App\BlogPost $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class BlogPost extends Section implements Initializable
{
	/**
	 * @var \App\BlogPost
	 */
	protected $model;

	/**
	 * Initialize class.
	 */
	public function initialize()
	{
		// Добавление пункта меню и счетчика кол-ва записей в разделе
		$this->addToNavigation($priority = 500);

		$this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {

		});
	}

	/**
	 * @return string
	 */
	public function getIcon()
	{
		return 'fa fa-pencil';
	}

	/**
	 * @return string|\Symfony\Component\Translation\TranslatorInterface
	 */
	public function getTitle()
	{
		return 'Посты блога';
	}

	/**
	 * @return DisplayInterface
	 */
	public function onDisplay()
	{
		return AdminDisplay::table()
			->setHtmlAttribute('class', 'table-primary')
			->setColumns(
				AdminColumn::text('id', '#')->setWidth('30px'),
				AdminColumn::image('thumbnail', 'Миниатюра'),
				AdminColumn::text('header', 'Заголовок')
			)->paginate(20);
	}

	/**
	 * @param int $id
	 *
	 * @return FormInterface
	 */
	public function onEdit($id)
	{
		return AdminForm::panel()->addBody([
			AdminFormElement::text('header', 'Заголовок')->required(),
			AdminFormElement::text('category', 'Направление')->required(),
			AdminFormElement::wysiwyg('body', 'Содержание', 'ckeditor')->required(),
			AdminFormElement::image('thumbnail', 'Миниатюра')->required(),
			AdminFormElement::text('slug', 'SLUG (заголовок транслитом)')->required(),
			AdminFormElement::select('author_id', 'Выберите автора')
				->setModelForOptions(\App\User::class)
				->setDisplay(function($option) {
					return "{$option->name}";
				})->required(),
			AdminFormElement::text('meta_title', 'meta_title')->required(),
			AdminFormElement::text('meta_description', 'meta_description')->required(),
			AdminFormElement::text('meta_keywords', 'meta_keywords')->required()
		]);
	}

	/**
	 * @return FormInterface
	 */
	public function onCreate()
	{
		// Создание и редактирование записи идентичны, поэтому перенаправляем на метод редактирования
		return $this->onEdit(null);
	}

	/**
	 * Переопределение метода содержащего заголовок создания записи
	 *
	 * @return string|\Symfony\Component\Translation\TranslatorInterface
	 */
	public function getCreateTitle()
	{
		return 'Добавление поста в блог';
	}

	/**
	 * Переопределение метода для запрета удаления записи
	 *
	 * @param \Illuminate\Database\Eloquent\Model $model
	 *
	 * @return bool
	 */
	public function isDeletable(\Illuminate\Database\Eloquent\Model $model)
	{
		return true;
	}
}
