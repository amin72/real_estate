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
        // CRUD::column('address')->type('textarea');
        CRUD::column('city');
        // CRUD::column('zipcode');
        // CRUD::column('description');
        CRUD::column('price');
        // CRUD::column('bedrooms');
        // CRUD::column('has_store')->type('boolean');
        // CRUD::column('has_garage')->type('boolean');
        // CRUD::column('sqft')->type('number');
        CRUD::column('published')->type('boolean');
        // CRUD::column('image')->type('file');
        // CRUD::column('image_1');
        // CRUD::column('image_2');
        // CRUD::column('image_3');
        // CRUD::column('image_4');
        // CRUD::column('image_5');
        // CRUD::column('image_6')->type('image');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    // protected function setupCreateOperation()
    // {
    //     CRUD::setValidation(ListingRequest::class);

    //     CRUD::field('title');
    //     CRUD::field('address');
    //     CRUD::field('city');
    //     CRUD::field('zipcode');
    //     CRUD::field('description');
    //     CRUD::field('price')->type('number');
    //     CRUD::field('bedrooms')->type('number');
    //     CRUD::field('has_store');
    //     CRUD::field('has_garage');
    //     CRUD::field('sqft')->type('number');
    //     CRUD::field('published')->type('boolean');
    //     CRUD::field('image')->type('image');
    //     CRUD::field('image_1')->type('image');
    //     CRUD::field('image_2')->type('image');
    //     CRUD::field('image_3')->type('image');
    //     CRUD::field('image_4')->type('image');
    //     CRUD::field('image_5')->type('image');
    //     CRUD::field('image_6')->type('image');

    //     /**
    //      * Fields can be defined using the fluent syntax or array syntax:
    //      * - CRUD::field('price')->type('number');
    //      * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
    //      */
    // }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
