<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;

class PagesController extends Controller
{
    public function termsAndConditions()
    {
        return view('terms-and-condition');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function campaign()
    {
        return view('campaign');
    }

    public function career()
    {
        return view('career');
    }

    public function album()
    {
        return view('album');
    }

    public function faq()
    {
        return view('faq');
    }

    public function payment()
    {
        return view('payment');
    }

    public function benefit()
    {
        return view('benefits');
    }

    public function partners()
    {
        return view('partners');
    }

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function mileStones()
    {
        return view('milestones');
    }

    public function blogRead()
    {
        return view('blog-read');
    }

    public function blog()
    {
        return view('blog');
    }

    public function error404Page()
    {
        return view('404');
    }
    public function error500Page()
    {
        return view('500');
    }

    public function investorDashboard()
    {
        return view('investor-dashboard');
    }

    public function investeeDashboard()
    {
        return view('investee-dashboard');
    }

    public function campaignGrossing()
    {
        return view('campaign-grossing');
    }

    public function complaint()
    {
        return view('complaint');
    }

    public function complaintForm()
    {
        return view('complaint-form');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogList()
    {
        return view('blog-list');
    }

    public function updateProfile()
    {
        return view('update-profilepage');
    }

    public function signUp()
    {
        return view('signup');
    }

    public function sign_up()
    {
        return view('sign-Up');
    }

    public function login()
    {
        return view('login');
    }

    public function totalInvestment()
    {
        return view('investors_total_list_of_investments');
    }

    public function testModals()
    {
        $user = Auth::user();
        $row = \DB::table('transactions')->where('user_id',$user)->first();
        $amount = $row->amount ?? "";
        $transid = $row->transaction_ref ?? "";

        return view('testmodals',['amount'=> $amount, 'transid' => $transid]);

    }
}
