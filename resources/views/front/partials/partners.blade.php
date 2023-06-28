<section class="partner-section">
    <div class="container">
        <div class="partner-section-box text-center">
            <h3>Our awesome clients we've had the pleasure to work with</h3>
            <ul class="partner-listing m-0 p-0">
                @foreach($clients as $client)
                <li class="list-unstyled d-inline-block wow fadeIn" data-wow-duration="5s">
                    <img src="{{ asset('storage/clients/'.$client->logo)  }}" alt="" style="width:100px; height: 100px">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
