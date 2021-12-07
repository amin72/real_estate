<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ManagerInfoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ManagerInfoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ManagerInfoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ManagerInfo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/manager-info');
        CRUD::setEntityNameStrings('اطلاعات مدیر سایت', 'اطلاعات مدیر سایت');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->removeButton('create');

        CRUD::column('name')->label(trans('backpack.name'));
        CRUD::column('phone')->label(trans('backpack.phone'));
        CRUD::column('mobile')->label(trans('backpack.mobile'));
        CRUD::column('whatsapp')->label(trans('backpack.whatsapp'));
        CRUD::column('email')->label(trans('backpack.email'));
        CRUD::column('instagram')->label(trans('backpack.instagram'));
        CRUD::column('telegram')->label(trans('backpack.telegram'));

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(ManagerInfoRequest::class);

        CRUD::field('name')->label(trans('backpack.name'));
        CRUD::field('phone')->label(trans('backpack.phone'));
        CRUD::field('mobile')->label(trans('backpack.mobile'));
        CRUD::field('whatsapp')->label(trans('backpack.whatsapp'));
        CRUD::field('email')->label(trans('backpack.email'));
        CRUD::field('instagram')->label(trans('backpack.instagram'));
        CRUD::field('telegram')->label(trans('backpack.telegram'));


    }
}
