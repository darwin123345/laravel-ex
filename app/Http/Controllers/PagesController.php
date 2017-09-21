<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
   public function missionvision(){
        $title = 'History';
        return view('pages.missionvision')->with('title', $title);
    } 
    public function history(){
        $title = 'History';
        return view('pages.history')->with('title', $title);
    }
    public function plp_hymn(){
        $title = 'PLP HYMN';
        return view('pages.plp_hymn')->with('title', $title);
    }
    public function logo_and_symbol(){
        $title = ' LOGO';
        return view('pages.logo_and_symbol')->with('title', $title);
    }
   
    public function academic_calendar(){
        $title = 'Calendar';
        return view('pages.academic_calendar')->with('title', $title);
    }
    public function map(){
        $title = ' MAPA';
        return view('pages.map')->with('title', $title);
    }
    public function rules_and_regulation(){
        $title = ' BATAS';
        return view('pages.rules_and_regulation')->with('title', $title);
    }
    public function arts_and_sciences(){
        $title = ' Arts';
        return view('pages.arts_and_sciences')->with('title', $title);
    }
    public function business_and_accountancy(){
        $title = ' BA';
        return view('pages.business_and_accountacy')->with('title', $title);
    }
    public function computer_studies(){
        $title = ' CSIT';
        return view('pages.computer_studies')->with('title', $title);
    }
    public function education(){
        $title = ' MAGAAT';
        return view('pages.education')->with('title', $title);
    }
    public function engineering(){
        $title = ' EE';
        return view('pages.engineering')->with('title', $title);
    }
    public function international_hospitality_management(){
        $title = ' HM';
        return view('pages.international_hospitality_management')->with('title', $title);
    }
    public function nursing(){
        $title = ' NURSE';
        return view('pages.nursing')->with('title', $title);
    }
    public function student_council(){
        $title = ' PSSC';
        return view('pages.student_council_(PSSC)')->with('title', $title);
    }
    public function scholarship_programs(){
        $title = ' SCHOLAR';
        return view('pages.scholarship_programs')->with('title', $title);
    }
    public function board_of_regents(){
        $title = ' BOR';
        return view('pages.board_of_regents')->with('title', $title);
    }
    public function executive_officials(){
        $title = 'EO';
        return view('pages.executive_officials')->with('title', $title);
    }
    public function faculty(){
        $title = ' faculty';
        return view('pages.faculty')->with('title', $title);
    }
    public function staff(){
        $title = ' YEIE';
        return view('pages.staff')->with('title', $title);
    }
    public function organizational_structure(){
        $title = ' OS';
        return view('pages.organizational_structure')->with('title', $title);
    }
    public function admission(){
        $title = ' admissiom';
        return view('pages.admission')->with('title', $title);
    }
    public function registrar(){
        $title = ' Hasdasd';
        return view('pages.registrar')->with('title', $title);
    }
    public function downloads(){
        $title = 'Downloads';
        return view('pages.downloads')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
     public function seal(){
        $title = 'Transparency Seal';
        return view('pages.seal')->with('title', $title);
    }

}
