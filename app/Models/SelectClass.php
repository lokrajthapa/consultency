<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPage;
use App\Models\Testimonial;
use App\Models\Branch;
use App\Models\Team;
use App\Models\Advertisement;
use App\Models\ChildContent;
use App\Models\WelcomeImage;
use App\Models\Visitor;
use PHPUnit\Framework\Constraint\Count;

class SelectClass extends Model
{


    public function selectReportUsingPID($PID)
    {

        $report = Report::select('blood_sugar', 'report_date')->where('patient_id', $PID)->get();

       
        return $report;
    }



    public function selectAdvertisement($position)
    {
        $advertisements = Advertisement::select('image', 'title')->where('position', $position)->get();
        return $advertisements;
    }


    public function selectParagraphOfPageDetailsFromTable($id)
    {
        $childContentDetails = ChildContent::select( 'text',)
            ->with(['Childpage' => function ($q) {
                $q->select(['id', 'child_title']);
            }])
            ->where('childpage_id', $id)
            ->get();



        return $childContentDetails;
    }



    public function selectSubHeading($heading)
    {

        $subheading = ChildPage::select('id', 'child_title')
            ->whereHas('parentpage', function ($q) use ($heading) {
                $q->where('title', $heading);
            })
            ->get();

        return $subheading;
    }

    public function selectHeading($heading)
    {
        $mainheading = ParentPage::select('id', 'title')->Where('title',$heading)->get();

  
        return $mainheading;
    }


    public function selectTestimonial()
    {
        $testinomials = Testimonial::all();
        return  $testinomials;
    }

    public function selectindexBranch()
    {
        $branches = Branch::orderBy('id', 'DESC')->take(3)->get();
        return  $branches;
    }

    public function selectNews()
    {
        $selectNews = Post::orderBy('id', 'DESC')->take(2)->get();
        return  $selectNews;
    }


    public function selectBranch()
    {
        $branches = Branch::all();
        return  $branches;
    }

    public function selectTeam()
    {
        $teams = Team::all();
        return  $teams;
    }

    public function selectBlog()
    {
        $selectBlog = Blog::all();
        return  $selectBlog;
    }

    public function SelectServices($searchKey)
    {
        $selectServices=\DB::select("select child_contents.childpage_id,child_title,Thumbnailimg from child_pages inner join child_contents  on child_contents.childpage_id=child_pages.id inner join parent_pages on parent_pages.id=child_pages.parentpage_id where parent_pages.title='".$searchKey."'");

        return $selectServices;
        //dd( $selectServices[0]);

        // $data = Users::where('type',1)
        // ->where(function($query) use ($today) {
        //     return $query->whereDate('updated_at','!=', $today)
        //     ->orWhere('updated_at',null);
        //  })
        //  ->get();

        //inner join concept 
        //$dummydata = \DB::select("select dummyseconds.id, item_id,itemName,dummyseconds.units,rate,unitEqualsTo,bonus,quantity from dummyseconds inner join inventorysettings on inventorysettings.id=dummyseconds.item_id where dummyseconds.id='" . $id . "' and inventorysettings.status=0 ");
          

    }

    public function selectWelcomeimg()
    {
        $selectImage= WelcomeImage::find(1);
        return  $selectImage;
    }
        public function Visitors($macAddr,$ipAddr,$todaydate)
    {    
        $user = Visitor::where('macaddress',$macAddr)->get();       
        if(is_null($user))
        {
            $visitors = new Visitor();
            $visitors->ipaddres = $ipAddr;
            $visitors->macaddress = $macAddr;
            $visitors->date = $todaydate;
            $visitors->save(); 
        }
        else
        {
          

        }



              
    }
    public function totalvistor()
    {
        $totalvisitors= \DB::select("SELECT count(id) as count  FROM `visitors` ");
      
        return $totalvisitors;

        

    }
    public function todayvisited()
    {
        $todaydate= \Carbon\Carbon::today()->toDateString();    
 
        $vistors  = \DB::select("SELECT count(id) as count  FROM `visitors`  WHERE date='" . $todaydate . "';");
        
        return $vistors;
      

       

    }

}
