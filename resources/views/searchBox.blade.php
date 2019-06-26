
    @if($user = Auth::user())
    {{-- booking counter --}}
        <div class="w3-row alien-shadow inspire-01 w3-transition-05 w3-topbar w3-bottombar w3-border-white">
            <div class="w3-col l1 m12 s12"><br></div>
            <div class="w3-col l10 m12 s12">
                <div class="booking-container w3-padding-64 w3-text-white">
                    <div class="w3-row">
                        <div class="w3-col l4 w3-padding-small">
                            DESTINATION
                            <input type="text" class="w3-input w3-margin-top w3-padding-large" placeholder="Search destination">
                        </div>
                        <div class="w3-col l2 w3-padding-small">
                            CHECK IN
                            <input type="date" class="w3-input w3-margin-top w3-padding-large">
                        </div>
                        <div class="w3-col l2 w3-padding-small">
                            CHECK OUT
                            <input type="date" class="w3-input w3-margin-top w3-padding-large">
                        </div>
                        <div class="w3-col l1 w3-padding-small">
                            ADULTS
                            <select name="" id="" class="w3-select w3-padding-large w3-margin-top">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                            </select>
                        </div>
                        <div class="w3-col l1 w3-padding-small">
                            CHILDREN
                            <select name="" id="" class="w3-select w3-padding-large w3-margin-top">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                        <div class="w3-col l2 w3-padding-small">
                            <br>
                            <div class="w3-btn w3-margin-top search-btn w3-round-xxlarge w3-hover-shadow w3-border w3-border-white btn-shine w3-padding-large w3-transition-05">
                                SEARCH..
                            </div>
                        </div>
                    </div>{{-- booking counter inside w3-row --}}
                </div>
            </div>{{-- booking counter w3-col l10--}}
            <div class="w3-col l1 m12 s12"><br></div>
        </div>{{-- booking counter w3-row ends --}}
        <br>
        <br>
        <br>
    @endif