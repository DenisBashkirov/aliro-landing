<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\GalleryItem;
use App\LayoutAboutItems;
use App\LayoutBenefits;
use App\LayoutCategoryItem;
use App\LayoutCreditItems;
use App\Mail\OrderRecieved;
use App\Order;
use App\OrderType;
use App\OurContactSocials;
use App\PortfolioItem;
use App\Subcategory;
use App\Testimonial;
use Illuminate\Http\Request;
use Route;
use Mail;

class PagesController extends BaseController
{
    public function __construct()
    {
        $route_name = Route::getCurrentRoute()->getName();
        $this->template = 'frontend.pages.' . $route_name;
    }


    public function home()
    {
        $benefits = LayoutBenefits::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'benefits', $benefits);

        $credit_items = LayoutCreditItems::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'credit_items', $credit_items);

        $about_items = LayoutAboutItems::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'about_items', $about_items);

        $category_items = LayoutCategoryItem::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'category_items', $category_items);

        $portfolio_items = PortfolioItem::orderBy('ordering')->get();
        $this->vars = array_add($this->vars, 'portfolio_items', $portfolio_items);

        $this->page_title = 'Окна и двери от производителя - пластиковые и алюминиевые';

        return $this->renderOutput();
    }

    public function thanks(Request $request)
    {
        $order_type = OrderType::where('slug', $request->input('order_type'))->first();

        $client = Client::where('phone', $request->input('phone'))->first();

        if (!$client)
        {
            $client_data = [
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone')
            ];

            $client = Client::create($client_data);
        }

        $order = Order::create([
            'client_name'=>$request->input('name'),
            'client_id'=>$client->id,
            'type_id'=>$order_type->id
        ]);

        Mail::to('era-digital@yandex.ru')->send(new OrderRecieved($order));

        $this->template = 'frontend.pages.thanks';

        $this->page_title = 'Спасибо за вашу заявку!';

        return $this->renderOutput();
    }
}
