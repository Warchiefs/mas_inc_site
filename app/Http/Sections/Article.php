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
 * Class Article
 *
 * @property \App\Article $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Article extends Section implements Initializable
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
		return 'Научные публикации';
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
				AdminColumn::text('header', 'Заголовок'),
				AdminColumn::text('authors', 'Авторы')
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
			AdminFormElement::text('authors', 'Авторы')->required(),
			AdminFormElement::text('link', 'Ссылка на статью')->required(),
			AdminFormElement::text('published_at', 'Год и место публикации')->required(),
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
		return 'Добавление научной публикации';
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
