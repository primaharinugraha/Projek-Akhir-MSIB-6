<?php

namespace App\Exports;

use App\Models\Finance;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class FinancesExport implements FromCollection
{

    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->user->finances()->asset()->get()
            ->push($this->user->finances()->liability()->get())
            ->push(['', '', '', 'Total Assets', $this->user->finances()->asset()->total()])
            ->push(['', '', '', 'Total Liabilities', $this->user->finances()->liability()->total()])
            ->push(['', '', '', 'Total', $this->user->finances()->totalAll()]);
    }
}
