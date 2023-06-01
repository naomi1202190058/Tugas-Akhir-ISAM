<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function pengajuan() {
        return view("ukm.proposal.pengajuan");
    }

    public function monitoring() {
        return view("ukm.proposal.monitoring");
    }

    public function waiting() {
        return view("ditmawa.proposal.waiting");
    }

    public function approved() {
        return view("ditmawa.proposal.approved");
    }

    public function declined() {
        return view("ditmawa.proposal.declined");
    }
}
