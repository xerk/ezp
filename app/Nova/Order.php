<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\BelongsTo;
use Vyuldashev\NovaMoneyField\Money;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Order extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Order';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'billing_email';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'billing_email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('User'),

            Text::make('Name', 'billing_name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email', 'billing_email')
                ->sortable()
                ->rules('required', 'email', 'max:254'),

            Place::make('Address', 'billing_address')
                ->sortable()
                ->rules('required', 'max:255')
                ->hideFromIndex(),

            BelongsTo::make('City'),

            Text::make('Phone', 'billing_phone')
                ->sortable()
                ->rules('required', 'max:254'),

            Money::make('Subtotal', 'EGP', 'billing_subtotal')
                ->sortable()
                ->hideFromIndex(),

            Money::make('Tax', 'EGP', 'billing_tax')
                ->sortable()
                ->hideFromIndex(),

            Money::make('Total', 'EGP', 'billing_total')
                ->sortable(),

            Text::make('Payment Getaway')
                ->sortable(),

            BelongsToMany::make('Products'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
