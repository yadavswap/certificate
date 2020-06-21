<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
// 
use setasign\Fpdi\Fpdi;


class StudentController extends Controller
{
    public function index()
    {
        
        $studentsdata = Student::all();
        // $studentsdata =['name'=>'swapnil'];
        return view('/student',compact('studentsdata'));
    }
    public function showdata()
    {
        //
        $studentsdata = Student::all();
        // $studentsdata =['name'=>'swapnil'];
        return view('/yadavswap',compact('studentsdata'));
    }

    
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         $students = new Student();
         $students->name= $request->name;
         $students->place= $request->place;


         $students->email = $request->email;
         $students->mobile = $request->mobile;

         $students->email_one = $request->email_one;


         $saved=$students->save();
         if($saved){
             if($students->email_one==='ainet')
            //  return view('/welcome');
                return redirect('generate/'.$students->id);
              else
                return view ('404');  

         }else
             return view('404');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //  
    public function generate($id){

        $student = \App\Student::find($id);

        $pdf = new PDF();
        $pdf->AddFont('Calligrapher','','call.php');

        $pdf->AliasNbPages();
        $pdf->setSourceFile("jmpc.pdf");
        $tpl = $pdf->importPage(1);
        $pdf->AddPage("N");
        $pdf->useTemplate($tpl);
        $pdf->SetFont('Helvetica','I',20);
        $pdf->SetTextColor(9, 34, 170 );

        $pdf->Text(70,140,$student->name);
        $pdf->Text(20,151,$student->place);

        // $pdf->Text(122,172.10,$marksheet->stud_id);
        // $pdf->Text(131,178.10,$marksheet->stud_name);
        // $pdf->Text(134,185.10,$marksheet->adhar_no);
        // $pdf->Text(137,192.10,$marksheet->section);
        $pdf->Output();
    }
}

class PDF extends FPDI {

    function Header(){

    }
    function PutLink($URL, $txt)
    {
        // Put a hyperlink
        $this->SetTextColor(0,50,100);
        $this->SetStyle('U',true);
        $this->Write(5,$txt,$URL);
        $this->SetStyle('U',false);
        // $this->SetTextColor(0);
    }




    // 
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
