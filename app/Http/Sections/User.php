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
 * Class User
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class User extends Section implements Initializable
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
		return 'fa fa-users';
	}

	/**
	 * @return string|\Symfony\Component\Translation\TranslatorInterface
	 */
	public function getTitle()
	{
		return 'Сотрудники';
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
				AdminColumn::image('image', 'Аватар'),
				AdminColumn::text('name', 'Имя')
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
			AdminFormElement::text('name', 'Имя')->required(),
			AdminFormElement::image('image', 'Аватар')->required(),
			AdminFormElement::text('department', 'Род деятельности')->required(),
			AdminFormElement::text('about', 'Информация')->required(),
			AdminFormElement::text('researchgate', 'ResearchGate')->required(),
			AdminFormElement::text('vk', 'Вконтакте')->required(),
		]);
	}

	/**
	 * @return FormInterface
	 */
	public function onCreate()
	{
		return redirect(url('/register'));
	}

	/**
	 * Переопределение метода содержащего заголовок создания записи
	 *
	 * @return string|\Symfony\Component\Translation\TranslatorInterface
	 */
	public function getCreateTitle()
	{
		return 'Добавление сотрудника';
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
