@extends('layout')
@section('title') Регистрация @endsection
@section('main_content')
<?php

use App\Models\Hall;
use App\Models\Seance;
use App\Models\Ticket;
use Illuminate\Support\Arr;

$seance = new Seance();
$seance = $seance->where('id', 1)->first();
$tickets = new Ticket();
$reservedSeats = $tickets->where('idSeance', $seance->id)->select('id','row','column')->get();
foreach($reservedSeats as $seat)
    echo $seat->row.$seat->column.' ';

// $temp = $reservedSeats->where([
//     ['row', 4],
//     ['column', 4],
// ]);

// dd($reservedSeats);
?>

<div class="container">
<center>
<br>
		<div class="screen-ui">
			<div id="screen">

			</div>
			
			<table class="table" id="table-screen">
				<!-- <thead id="screen-head">
					<tr>
						
		    		</tr>
		    	</thead> -->
		    	<tbody id="screen-body">
                @for ($i = 1; $i <= 10; $i++)
                <tr id='table-screen-row'>
                    @for ($j = 1; $j <= 15; $j++)
                        <td>
                            []
                        </td>		
                    @endfor
                </tr>
                @endfor
                    
		    	</tbody>
			</table>

			<!-- <div class="text-center">
				<button type="button" class="btn btn-primary btn-lg submitBtn" id="confirmSelection">Confirm Selection</button>
				<div class="screen-map">
				<label for="empty-seat-map">Selected Seat</label>
				<img src="img/booked-seat.png" class="booked-seat-map" id="booked-seat-map">
				<br/>
				<label for="">Reserved Seat</label>
				<img src="img/reserved-seat.png" class="reserved-seat-map" id="reserved-seat-map">
				<br/>
				<label for="">Empty Seat</label>
				<img src="img/empty-seat.png" class="empty-seat-map" id="empty-seat-map">
			</div>	 -->
			</div>
					
		</div>
	</body>
</center>
</div>
@endsection
<style scoped>
#screen{
    width:70%;
    border-bottom: 50px solid gray;
	border-left: 75px solid transparent;
	border-right: 75px solid transparent;
}
</style>

