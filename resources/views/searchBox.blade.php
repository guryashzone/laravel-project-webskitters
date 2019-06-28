
    @if($user = Auth::user())
    {{-- booking counter --}}
        <div class="w3-row w3-card-4 inspire-01 w3-transition-05 w3-border w3-border-white">
            <div class="w3-col l1 m12 s12"><br></div>
            <div class="w3-col l10 m12 s12">
                <div class="booking-container w3-padding-64 w3-text-white">
                    <div class="w3-row">
                        <form action="/book" id="booking_form" method="POST">
                        @csrf
                        <div class="w3-col l4 w3-padding-small">
                            DESTINATION
                            <input type="text" name="package_name" class="w3-input w3-margin-top w3-padding-large" id="destination_search" list="packages" placeholder="Search destination">
                            <datalist id="packages">
                            </datalist>
                        </div>
                        <div class="w3-col l2 w3-padding-small">
                            CHECK IN
                            <input type="date" name="check_in" class="w3-input w3-margin-top w3-padding-large">
                        </div>
                        <div class="w3-col l2 w3-padding-small">
                            CHECK OUT
                            <input type="date" name="check_out" class="w3-input w3-margin-top w3-padding-large">
                        </div>
                        <div class="w3-col l1 w3-padding-small">
                            ADULTS
                            <select name="adults" id="" class="w3-select w3-padding-large w3-margin-top">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                            </select>
                        </div>
                        <div class="w3-col l1 w3-padding-small">
                            CHILDREN
                            <select name="children" id="" class="w3-select w3-padding-large w3-margin-top">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                        <div class="w3-col l2 w3-padding-small">
                            <br>
                            <div id="book_btn" class="w3-btn w3-margin-top search-btn w3-round-xxlarge w3-hover-shadow w3-border w3-border-white w3-block btn-shine w3-padding-large w3-transition-05">
                                <b>BOOK NOW..</b>
                            </div>
                        </div>
                        </form>
                    </div>{{-- booking counter inside w3-row --}}
                </div>
            </div>{{-- booking counter w3-col l10--}}
            <div class="w3-col l1 m12 s12"><br></div>
        </div>{{-- booking counter w3-row ends --}}
        <br>
        <br>
        <br>
        <script>
            $(function(){
                $.ajax({
                    url : "/search",
                    type : "POST",
                    success : function(res){
                        // console.log(res);
                        var data = res;
                        var list = "";
                        $(data).each(function(each){
                            list += `<option value='${data[each]['package_name']}'>`;
                        });
                        $("#packages").html(list);
                    }
                });
            });
            $(document).on("click","#book_btn",function(){
                $("#booking_form").submit();
            })
        </script>
        <script type="text/javascript">
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
        </script>
        
    @endif