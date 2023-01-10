<div>
	<div class="py-10 px-10">
		{{$selectCompanyId}}
		<select name="name" class="js-example-basic-single0 w-1/2 py-2 px-2">
			@foreach ($companies as $company )
			<option value="{{$company['id']}}">{{ $company["name"]}}</option>
			@endforeach
		</select>
	</div>

	@if ($isFoundCompany && count($guests) != 0)
	<div>
		<select wire:model="selectGuestId" name="name" class="w-1/2 py-2 px-5 rounded">
			@foreach ( $guests as $guest)
			<option value="{{$guest["id"]}}">{{$guest["name"]}}</option>
			@endforeach
		</select>
	</div>
	@endif


</div>

@push("js")
<script>
	$(document).ready(function() {
		$('.js-example-basic-single0').select2();
		$('.js-example-basic-single0').on("change", function(e) {
			let data = $(this).val();
			@this.set('selectCompanyId', data);
		})
	});
</script>
@endpush
