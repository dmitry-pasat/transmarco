
<body>

	<h1>Email report {{ $date }}</h1>

	<p>
		
		Number of emails is <b>{{ count($emails) }}</b>
		
	</p>
	
	<h3>List of emails</h3>
	
	@foreach ($emails as $email)
	
		<p>
		
			{{ $email->filename }} | {{ $email->email }}
			
		</p>
		
	@endforeach		
	
	@include('reports.footer')
	
</body>
