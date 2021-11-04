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
        CRUD::setEntityNameStrings('listing', 'listings');
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

        CRUD::column('title')->type('text');
        CRUD::column('agent_name');
        CRUD::column('phone');
        CRUD::column('published')->type('boolean');

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

        CRUD::field('title');
        CRUD::field('address');
        CRUD::field('zipcode');
        CRUD::field('zone');
        CRUD::field('description');
        CRUD::field('price')->type('number');
        CRUD::field('bedrooms')->type('number');
        CRUD::field('has_store');
        CRUD::field('has_garage');
        CRUD::field('area')->type('number');
        CRUD::field('published')->type('boolean');
        CRUD::field('agent_name');
        CRUD::field('requested')->type('boolean');
        CRUD::field('exchange')->type('boolean');

        CRUD::field('image')->type('image');
        CRUD::field('image_1')->type('image');
        CRUD::field('image_2')->type('image');
        CRUD::field('image_3')->type('image');
        CRUD::field('image_4')->type('image');
        CRUD::field('image_5')->type('image');
        CRUD::field('image_6')->type('image');
    }
}
