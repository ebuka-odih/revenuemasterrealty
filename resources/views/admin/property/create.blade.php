@extends('admin.layout.app')
@section('content')
    <style>
        .form-control {
            background-color: #c8c8c8;
        }
    </style>

    <div style="margin-top: 50px" class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="nk-block nk-block-lg">
                            <div class="container m-2">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if(session()->has('updated'))
                                    <div class="alert alert-success">
                                        {{ session()->get('updated') }}
                                    </div>
                                @endif
                                @if(session()->has('deleted'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('deleted') }}
                                    </div>
                                @endif
                            </div>

                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Add Property</h3>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview ">
                              <div class="container">
                                  <form action="{{ route('admin.property.store') }}" method="POST">
                                      @csrf


                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Name</label>
                                                  <div class="form-control-wrap">
                                                      <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Price</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Rooms</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="rooms" value="{{ old('rooms') }}" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Floor</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="floor" value="{{ old('floor') }}" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Type</label>
                                                  <div class="form-control-wrap">
                                                      <select name="type" class="form-control">
                                                          <option disabled selected>Select Type</option>
                                                          <option value="Single-Family Home">Single-Family Home</option>
                                                          <option value="Multifamily House">Multifamily House</option>
                                                          <option value="Apartment">Apartment</option>
                                                          <option value="Duplex">Duplex</option>
                                                          <option value="Townhouse">Townhouse</option>
                                                          <option value="Condominium (Condo)">Condominium (Condo)</option>
                                                          <option value="Bungalow">Bungalow</option>
                                                          <option value="Contemporary House">Contemporary House</option>
                                                      </select>

                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Building Year</label>
                                                  <div class="form-control-wrap">
                                                      <input type="text" class="form-control" name="building_year" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Square Meter</label>
                                                  <div class="form-control-wrap">
                                                      <input type="text" class="form-control" name="square_meter" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Location</label>
                                                  <div class="form-control-wrap">
                                                      <select id="country" name="building_location" class="form-control">
                                                          <option disabled selected>Select Country</option>
                                                          <option value="United Kingdom">United Kingdom</option>
                                                          <option value="United States">United States</option>
                                                          <option value="Afghanistan">Afghanistan</option>
                                                          <option value="Åland Islands">Åland Islands</option>
                                                          <option value="Albania">Albania</option>
                                                          <option value="Algeria">Algeria</option>
                                                          <option value="American Samoa">American Samoa</option>
                                                          <option value="Andorra">Andorra</option>
                                                          <option value="Angola">Angola</option>
                                                          <option value="Anguilla">Anguilla</option>
                                                          <option value="Antarctica">Antarctica</option>
                                                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                          <option value="Argentina">Argentina</option>
                                                          <option value="Armenia">Armenia</option>
                                                          <option value="Aruba">Aruba</option>
                                                          <option value="Australia">Australia</option>
                                                          <option value="Austria">Austria</option>
                                                          <option value="Azerbaijan">Azerbaijan</option>
                                                          <option value="Bahamas">Bahamas</option>
                                                          <option value="Bahrain">Bahrain</option>
                                                          <option value="Bangladesh">Bangladesh</option>
                                                          <option value="Barbados">Barbados</option>
                                                          <option value="Belarus">Belarus</option>
                                                          <option value="Belgium">Belgium</option>
                                                          <option value="Belize">Belize</option>
                                                          <option value="Benin">Benin</option>
                                                          <option value="Bermuda">Bermuda</option>
                                                          <option value="Bhutan">Bhutan</option>
                                                          <option value="Bolivia">Bolivia</option>
                                                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                          <option value="Botswana">Botswana</option>
                                                          <option value="Bouvet Island">Bouvet Island</option>
                                                          <option value="Brazil">Brazil</option>
                                                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                          <option value="Bulgaria">Bulgaria</option>
                                                          <option value="Burkina Faso">Burkina Faso</option>
                                                          <option value="Burundi">Burundi</option>
                                                          <option value="Cambodia">Cambodia</option>
                                                          <option value="Cameroon">Cameroon</option>
                                                          <option value="Canada">Canada</option>
                                                          <option value="Cape Verde">Cape Verde</option>
                                                          <option value="Cayman Islands">Cayman Islands</option>
                                                          <option value="Central African Republic">Central African Republic</option>
                                                          <option value="Chad">Chad</option>
                                                          <option value="Chile">Chile</option>
                                                          <option value="China">China</option>
                                                          <option value="Christmas Island">Christmas Island</option>
                                                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                          <option value="Colombia">Colombia</option>
                                                          <option value="Comoros">Comoros</option>
                                                          <option value="Congo">Congo</option>
                                                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                          <option value="Cook Islands">Cook Islands</option>
                                                          <option value="Costa Rica">Costa Rica</option>
                                                          <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                          <option value="Croatia">Croatia</option>
                                                          <option value="Cuba">Cuba</option>
                                                          <option value="Cyprus">Cyprus</option>
                                                          <option value="Czech Republic">Czech Republic</option>
                                                          <option value="Denmark">Denmark</option>
                                                          <option value="Djibouti">Djibouti</option>
                                                          <option value="Dominica">Dominica</option>
                                                          <option value="Dominican Republic">Dominican Republic</option>
                                                          <option value="Ecuador">Ecuador</option>
                                                          <option value="Egypt">Egypt</option>
                                                          <option value="El Salvador">El Salvador</option>
                                                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                          <option value="Eritrea">Eritrea</option>
                                                          <option value="Estonia">Estonia</option>
                                                          <option value="Ethiopia">Ethiopia</option>
                                                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                          <option value="Faroe Islands">Faroe Islands</option>
                                                          <option value="Fiji">Fiji</option>
                                                          <option value="Finland">Finland</option>
                                                          <option value="France">France</option>
                                                          <option value="French Guiana">French Guiana</option>
                                                          <option value="French Polynesia">French Polynesia</option>
                                                          <option value="French Southern Territories">French Southern Territories</option>
                                                          <option value="Gabon">Gabon</option>
                                                          <option value="Gambia">Gambia</option>
                                                          <option value="Georgia">Georgia</option>
                                                          <option value="Germany">Germany</option>
                                                          <option value="Ghana">Ghana</option>
                                                          <option value="Gibraltar">Gibraltar</option>
                                                          <option value="Greece">Greece</option>
                                                          <option value="Greenland">Greenland</option>
                                                          <option value="Grenada">Grenada</option>
                                                          <option value="Guadeloupe">Guadeloupe</option>
                                                          <option value="Guam">Guam</option>
                                                          <option value="Guatemala">Guatemala</option>
                                                          <option value="Guernsey">Guernsey</option>
                                                          <option value="Guinea">Guinea</option>
                                                          <option value="Guinea-bissau">Guinea-bissau</option>
                                                          <option value="Guyana">Guyana</option>
                                                          <option value="Haiti">Haiti</option>
                                                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                          <option value="Honduras">Honduras</option>
                                                          <option value="Hong Kong">Hong Kong</option>
                                                          <option value="Hungary">Hungary</option>
                                                          <option value="Iceland">Iceland</option>
                                                          <option value="India">India</option>
                                                          <option value="Indonesia">Indonesia</option>
                                                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                          <option value="Iraq">Iraq</option>
                                                          <option value="Ireland">Ireland</option>
                                                          <option value="Isle of Man">Isle of Man</option>
                                                          <option value="Israel">Israel</option>
                                                          <option value="Italy">Italy</option>
                                                          <option value="Jamaica">Jamaica</option>
                                                          <option value="Japan">Japan</option>
                                                          <option value="Jersey">Jersey</option>
                                                          <option value="Jordan">Jordan</option>
                                                          <option value="Kazakhstan">Kazakhstan</option>
                                                          <option value="Kenya">Kenya</option>
                                                          <option value="Kiribati">Kiribati</option>
                                                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                          <option value="Korea, Republic of">Korea, Republic of</option>
                                                          <option value="Kuwait">Kuwait</option>
                                                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                          <option value="Latvia">Latvia</option>
                                                          <option value="Lebanon">Lebanon</option>
                                                          <option value="Lesotho">Lesotho</option>
                                                          <option value="Liberia">Liberia</option>
                                                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                          <option value="Liechtenstein">Liechtenstein</option>
                                                          <option value="Lithuania">Lithuania</option>
                                                          <option value="Luxembourg">Luxembourg</option>
                                                          <option value="Macao">Macao</option>
                                                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                          <option value="Madagascar">Madagascar</option>
                                                          <option value="Malawi">Malawi</option>
                                                          <option value="Malaysia">Malaysia</option>
                                                          <option value="Maldives">Maldives</option>
                                                          <option value="Mali">Mali</option>
                                                          <option value="Malta">Malta</option>
                                                          <option value="Marshall Islands">Marshall Islands</option>
                                                          <option value="Martinique">Martinique</option>
                                                          <option value="Mauritania">Mauritania</option>
                                                          <option value="Mauritius">Mauritius</option>
                                                          <option value="Mayotte">Mayotte</option>
                                                          <option value="Mexico">Mexico</option>
                                                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                          <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                          <option value="Monaco">Monaco</option>
                                                          <option value="Mongolia">Mongolia</option>
                                                          <option value="Montenegro">Montenegro</option>
                                                          <option value="Montserrat">Montserrat</option>
                                                          <option value="Morocco">Morocco</option>
                                                          <option value="Mozambique">Mozambique</option>
                                                          <option value="Myanmar">Myanmar</option>
                                                          <option value="Namibia">Namibia</option>
                                                          <option value="Nauru">Nauru</option>
                                                          <option value="Nepal">Nepal</option>
                                                          <option value="Netherlands">Netherlands</option>
                                                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                          <option value="New Caledonia">New Caledonia</option>
                                                          <option value="New Zealand">New Zealand</option>
                                                          <option value="Nicaragua">Nicaragua</option>
                                                          <option value="Niger">Niger</option>
                                                          <option value="Nigeria">Nigeria</option>
                                                          <option value="Niue">Niue</option>
                                                          <option value="Norfolk Island">Norfolk Island</option>
                                                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                          <option value="Norway">Norway</option>
                                                          <option value="Oman">Oman</option>
                                                          <option value="Pakistan">Pakistan</option>
                                                          <option value="Palau">Palau</option>
                                                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                          <option value="Panama">Panama</option>
                                                          <option value="Papua New Guinea">Papua New Guinea</option>
                                                          <option value="Paraguay">Paraguay</option>
                                                          <option value="Peru">Peru</option>
                                                          <option value="Philippines">Philippines</option>
                                                          <option value="Pitcairn">Pitcairn</option>
                                                          <option value="Poland">Poland</option>
                                                          <option value="Portugal">Portugal</option>
                                                          <option value="Puerto Rico">Puerto Rico</option>
                                                          <option value="Qatar">Qatar</option>
                                                          <option value="Reunion">Reunion</option>
                                                          <option value="Romania">Romania</option>
                                                          <option value="Russian Federation">Russian Federation</option>
                                                          <option value="Rwanda">Rwanda</option>
                                                          <option value="Saint Helena">Saint Helena</option>
                                                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                          <option value="Saint Lucia">Saint Lucia</option>
                                                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                          <option value="Samoa">Samoa</option>
                                                          <option value="San Marino">San Marino</option>
                                                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                          <option value="Saudi Arabia">Saudi Arabia</option>
                                                          <option value="Senegal">Senegal</option>
                                                          <option value="Serbia">Serbia</option>
                                                          <option value="Seychelles">Seychelles</option>
                                                          <option value="Sierra Leone">Sierra Leone</option>
                                                          <option value="Singapore">Singapore</option>
                                                          <option value="Slovakia">Slovakia</option>
                                                          <option value="Slovenia">Slovenia</option>
                                                          <option value="Solomon Islands">Solomon Islands</option>
                                                          <option value="Somalia">Somalia</option>
                                                          <option value="South Africa">South Africa</option>
                                                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                          <option value="Spain">Spain</option>
                                                          <option value="Sri Lanka">Sri Lanka</option>
                                                          <option value="Sudan">Sudan</option>
                                                          <option value="Suriname">Suriname</option>
                                                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                          <option value="Swaziland">Swaziland</option>
                                                          <option value="Sweden">Sweden</option>
                                                          <option value="Switzerland">Switzerland</option>
                                                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                          <option value="Taiwan">Taiwan</option>
                                                          <option value="Tajikistan">Tajikistan</option>
                                                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                          <option value="Thailand">Thailand</option>
                                                          <option value="Timor-leste">Timor-leste</option>
                                                          <option value="Togo">Togo</option>
                                                          <option value="Tokelau">Tokelau</option>
                                                          <option value="Tonga">Tonga</option>
                                                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                          <option value="Tunisia">Tunisia</option>
                                                          <option value="Turkey">Turkey</option>
                                                          <option value="Turkmenistan">Turkmenistan</option>
                                                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                          <option value="Tuvalu">Tuvalu</option>
                                                          <option value="Uganda">Uganda</option>
                                                          <option value="Ukraine">Ukraine</option>
                                                          <option value="United Arab Emirates">United Arab Emirates</option>
                                                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                          <option value="Uruguay">Uruguay</option>
                                                          <option value="Uzbekistan">Uzbekistan</option>
                                                          <option value="Vanuatu">Vanuatu</option>
                                                          <option value="Venezuela">Venezuela</option>
                                                          <option value="Viet Nam">Viet Nam</option>
                                                          <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                          <option value="Western Sahara">Western Sahara</option>
                                                          <option value="Yemen">Yemen</option>
                                                          <option value="Zambia">Zambia</option>
                                                          <option value="Zimbabwe">Zimbabwe</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Address</label>
                                                  <div class="form-control-wrap">
                                                      <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Money Invested</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="invested" value="{{ old('invested') }}" id="full-name">
                                                      <small class="text-danger">How much has been invested already</small>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Reviews</label>
                                                  <div class="form-control-wrap">
                                                      <input type="text" class="form-control" name="reviews" value="{{ old('reviews') }}" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="form-label mt-2" for="full-name">Description</label>
                                          <div class="form-control-wrap">
                                              <textarea class="form-control" name="description"  id="" cols="30" rows="5">{{ old('description') }}</textarea>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Min Price</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="min_price" value="{{ old('min_price') }}" id="full-name">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Return Rate</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="return_rate" value="{{ old('return_rate') }}" id="full-name">
                                                      <small class="text-danger">Number of percentage</small>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Return For</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="return_for" value="{{ old('return_for') }}" id="full-name">
                                                      <small class="text-danger">Number of months</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row mb-2">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="cap">Capital Return</label>
                                                  <div class="form-control-wrap">
                                                      <select name="capital_back" id="cap" class="form-control">
                                                          <option value="Yes">Yes</option>
                                                          <option value="No">No</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label class="form-label mt-2" for="full-name">Target Duration</label>
                                                  <div class="form-control-wrap">
                                                      <input type="number" class="form-control" name="target_duration" value="{{ old('target_duration') }}" id="full-name">
                                                      <small class="text-danger">Number of months</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                      </div>
                                  </form>
                              </div>

                            </div><!-- .card-preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal  -->
    <div class="modal fade" tabindex="-1" id="modalDefault">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Property</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">

                </div>

            </div>
        </div>
    </div>
@endsection
