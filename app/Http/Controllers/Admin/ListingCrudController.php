<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ListingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ListingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ListingCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Listing::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/listing');
        CRUD::setEntityNameStrings('آگهی', 'اگهی ها');
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

        CRUD::column('title')->type('text')->label(trans('backpack.title'));
        CRUD::column('agent_name')->label(trans('backpack.agent_name'));
        CRUD::column('phone')->label(trans('backpack.phone'));
        CRUD::column('published')->type('boolean')->label(trans('backpack.published'));

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
        CRUD::setValidation(ListingRequest::class);

        CRUD::field('title')->label(trans('backpack.title'));

        CRUD::field('zone')->label(trans('backpack.zone'));
        CRUD::field('category')->label(trans('backpack.category'));
        CRUD::field('type')->label(trans('backpack.type'));

        CRUD::field('address')->label(trans('backpack.address'));
        CRUD::field('zipcode')->label(trans('backpack.zipcode'));
        CRUD::field('description')->label(trans('backpack.description'));
        CRUD::field('price')->type('number')->label(trans('backpack.price'));
        CRUD::field('price_monthly')->type('number')->label(trans('backpack.price_monthly'));
        CRUD::field('bedrooms')->type('number')->label(trans('backpack.bedrooms'));
        CRUD::field('has_store')->label(trans('backpack.has_store'));
        CRUD::field('has_garage')->label(trans('backpack.has_garage'));
        CRUD::field('has_elevator')->type('boolean')->label(trans('backpack.has_elevator'));
        CRUD::field('area')->type('number')->label(trans('backpack.area'));
        CRUD::field('published')->type('boolean')->label(trans('backpack.published'));
        
        CRUD::field('is_sold')->type('boolean')->label(trans('backpack.is_sold'));
        CRUD::field('sold_date')->type('date')->label(trans('backpack.sold_date'));

        CRUD::field('agent_name')->label(trans('backpack.agent_name'));
        CRUD::field('requested')->type('boolean')->label(trans('backpack.requested'));
        CRUD::field('exchange')->type('boolean')->label(trans('backpack.exchange'));

        CRUD::field('image')->type('image')->label(trans('backpack.image'));
        CRUD::field('image_1')->type('image')->label(trans('backpack.image_1'));
        CRUD::field('image_2')->type('image')->label(trans('backpack.image_2'));
        CRUD::field('image_3')->type('image')->label(trans('backpack.image_3'));
        CRUD::field('image_4')->type('image')->label(trans('backpack.image_4'));
        CRUD::field('image_5')->type('image')->label(trans('backpack.image_5'));
        CRUD::field('image_6')->type('image')->label(trans('backpack.image_6'));
    }
}
