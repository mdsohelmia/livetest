<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2 extends Component
{
	public $selectCompanyId = "";
	public $isFoundCompany = false;
	public $guests = [];
	public $selectGuestId = "";


	public function updatedSelectCompanyId()
	{
		// Fetch Guest By Company Id
		// $this->selectId
		// if (){}
		$this->guests  = [
			[
				"id" => 1,
				"name" => "Gest Data"
			],
			[
				"id" => 2,
				"name" => "Sadia Hot kichurie"
			],
		];
		$this->isFoundCompany = true;
	}


	public function updatedSelectGuestId()
	{
		dump($this->selectGuestId);
	}

	public function render()
	{
		$companies = [
			[
				"id" => 1,
				"name" => "XyZa"
			],
			[
				"id" => 2,
				"name" => "Sadia Hot kichurie"
			],
			[
				"id" => 3,
				"name" => "Sohel Mia valo chele"
			]
		];

		return view('livewire.select2', compact('companies'));
	}
}
