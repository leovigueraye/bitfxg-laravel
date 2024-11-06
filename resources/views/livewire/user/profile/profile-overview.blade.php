
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
    <div>
        <ul class="nav nav-pills nav-secondary mr-5" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-stats-tab" data-toggle="pill" href="#pills-stats" role="tab"
                    aria-controls="pills-stats" aria-selected="true">
                    My Stats
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-pmethod-tab" data-toggle="pill" href="#pills-pmethod" role="tab"
                    aria-controls="pills-pmethod" aria-selected="false">Payment Method</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-adsdetails-tab" data-toggle="pill" href="#pills-adsdetails"
                    role="tab" aria-controls="pills-adsdetails" aria-selected="false">Ads
                    Details</a>
            </li>

        </ul>
    </div>

</div>

<div class="tab-content mt-2 mb-3" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-stats" role="tabpanel" aria-labelledby="pills-stats-tab">
        <livewire:user.profile.my-stats />
    </div>


    <div class="tab-pane fade" id="pills-pmethod" role="tabpanel" aria-labelledby="pills-pmethod-tab">
        <livewire:user.profile.payment-p2p />
    </div>


    <div class="tab-pane fade" id="pills-adsdetails" role="tabpanel" aria-labelledby="pills-adsdetails-tab">

        <livewire:user.profile.ad-details-p2p />
    </div>
</div>
