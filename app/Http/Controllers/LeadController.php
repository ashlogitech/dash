<?php
use App\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function show($leadId)
    {
        $lead = Lead::find($leadId);
        if (!$lead) {
            // Handle the case when the lead is not found
            abort(404);
        }

        return view('admin.lead-details', ['lead' => $lead]);
    }
}

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads'; // Assuming 'leads' is the table name
    // Other model configurations and relationships if needed
}
