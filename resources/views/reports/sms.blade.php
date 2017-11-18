
<body>

	<h1>SMS report {{ $date }}</h1>

	<p>
		
		Number of sms is <b>{{ count($sms) }}</b>
		
	</p>
	
	<h3>List of sms</h3>
			
	@foreach ($sms as $item)
	
		<p>		
	
			{{ $item->filename }} | {{ $item->mobile }}
			
		</p>
		
	@endforeach		
		
	@include('reports.footer')
	
</body>	