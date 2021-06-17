<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BusinessRegisterResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $blocking_recurring_data_in_transaction = (isset($request->blocking_recurring_data_in_transaction))?$request->blocking_recurring_data_in_transaction:false;
        return [
            'slack' => $this->slack,
            'opening_date' => $this->opening_date,
            'closing_date' => $this->closing_date,
            'opening_date_label' => $this->parseDate($this->opening_date),
            'closing_date_label' => $this->parseDate($this->closing_date),
            'user' => new UserResource($this->user),
            'billing_counter' => ($blocking_recurring_data_in_transaction == false)?new BillingCounterResource($this->billing_counter):'',
            'opening_amount' => $this->opening_amount,
            'closing_amount' => $this->closing_amount,
            'credit_card_slips' => $this->credit_card_slips,
            'cheques' => $this->cheques,
            'detail_link' => (check_access(['A_DETAIL_BUSINESS_REGISTER'], true))?route('business_register', ['slack' => $this->slack]):'',
            'created_at_label' => $this->parseDate($this->created_at),
            'updated_at_label' => $this->parseDate($this->updated_at),
            'created_by' => new UserResource($this->createdUser),
            'updated_by' => new UserResource($this->updatedUser)
        ];
    }
}