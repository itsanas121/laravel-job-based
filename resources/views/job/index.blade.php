<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
     <h1>Job Board</h1>
     

     @foreach ($jobs as $job)
        <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>
     @endforeach
</div>
