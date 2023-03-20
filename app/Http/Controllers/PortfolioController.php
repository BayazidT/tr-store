<?php

namespace App\Http\Controllers;

use App\Models\Portfolio\EducationInfo;
use App\Models\Portfolio\ExperienceInfo;
use App\Models\Portfolio\ProfileAbout;
use App\Models\Portfolio\ProjectCategory;
use App\Models\Portfolio\SkillInfo;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function getPortfolio(){
        $data = [];
        $profileAbout = ProfileAbout::first();
        $educationInfo = EducationInfo::where('profile_id', 'ghgfhgsjj43453fjdfjd')->orderBy('id', 'asc')->get();
        $experienceInfo = ExperienceInfo::where('profile_id', 'ghgfhgsjj43453fjdfjd')->orderBy('id', 'desc')->get();
        $skillInfo = SkillInfo::where('profile_id', 'ghgfhgsjj43453fjdfjd')->orderBy('id', 'desc')->get();
        $projectCategory = ProjectCategory::where('profile_id', 'ghgfhgsjj43453fjdfjd')->orderBy('id', 'asc')->get();
        $data['profile_about']= $profileAbout;
        $data['education_info'] = $educationInfo;
        $data['experience_info'] = $experienceInfo;
        $data['skill_info'] = $skillInfo;
        $data['project_category'] = $projectCategory;
        return view('index')->with($data);
    }

    public function update_about(Request $request){
        $data = $request->except('_token', '_method');
        ProfileAbout::where('profile_id', $data['profile_id'])->update($data);
        return redirect()->back()->with('msg','Information Updated');
    }
}
