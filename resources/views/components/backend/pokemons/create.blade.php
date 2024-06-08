<x-layouts.backend>

    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="app-ecommerce">

            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">{{ $isEdit ? 'Chỉnh sữa Pokemon' : 'Thêm mới Pokemon' }}</h4>

                </div>

            </div>


            <form id="uploadForm" method="post" action="{{$isEdit ? route('backend.pokemons.update', $pokemon->id) : route('backend.pokemons.store')}}">
                @csrf
                <div class="row">
                    <!-- First column-->
                    <div class="col-12 col-lg-8">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Thông tin Pokemon</h5>
                            </div>

                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="ecommerce-product-name">Tên</label>
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                           placeholder="Tên" name="name" aria-label="Product title"
                                           value="{{ old('name',!empty($data) ? $data->name : '') }}">
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="row mb-3">
                                    <div class="col"><label class="form-label" for="pokemon-weight">Cân Nặng</label>
                                        <input type="number" class="form-control" id="pokemon-weight"
                                               placeholder="Cân nặng" name="weight" aria-label="Cân Nặng"
                                               value="{{ old('weight',!empty($data) ? $data->weight : '') }}">
                                        @if ($errors->has('weight'))
                                            <div class="text-danger" role="alert">{{ $errors->first('weight') }}</div>
                                        @endif
                                    </div>

                                    <div class="col"><label class="form-label"
                                                            for="pokemon-height">Chiều Cao</label>
                                        <input type="text" class="form-control" id="pokemon-height"
                                               placeholder="Chiều Cao" name="height" aria-label="Chiều Cao"
                                               value="{{ old('height',!empty($data) ? $data->height : '') }}">
                                        @if ($errors->has('height'))
                                            <div class="text-danger" role="alert">{{ $errors->first('height') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label" for="pokemon-description">Thông tin mô tả</label>

                                        <textarea class="form-control form-control-sm" name="description"
                                                  id="pokemon-description" class="description"
                                                  rows="3">{!! old('description',!empty($data) ? $data->description : '') !!}</textarea>


                                        @if ($errors->has('description'))
                                            <div class="text-danger" role="alert">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Máu</label>
                                        <div class="col-sm-10">
                                            <input type="range" class="form-range " name="hp" id="basic-default-name"
                                                   value="{{ old('hp',!empty($data) ? $data->hp : '') }}">
                                            @if ($errors->has('hp'))
                                                <div class="text-danger" role="alert">{{ $errors->first('hp') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-attack">Tấn
                                            Công</label>
                                        <div class="col-sm-10">
                                            <input type="range" class="form-range " name="attack"
                                                   id="basic-default-attack"
                                                   value="{{ old('attack',!empty($data) ? $data->attack : '') }}">
                                            @if ($errors->has('attack'))
                                                <div class="text-danger" role="alert">{{ $errors->first('attack') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-defense">Phòng
                                            thủ</label>
                                        <div class="col-sm-10">
                                            <input type="range" class="form-range " name="defense"
                                                   id="basic-default-defense"
                                                   value="{{ old('defense',!empty($data) ? $data->defense : '') }}">
                                            @if ($errors->has('defense'))
                                                <div class="text-danger" role="alert">{{ $errors->first('defense') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-speed">Tốc độ</label>
                                        <div class="col-sm-10">
                                            <input type="range" class="form-range " name="speed"
                                                   id="basic-default-speed"
                                                   value="{{ old('speed',!empty($data) ? $data->speed : '') }}">
                                            @if ($errors->has('speed'))
                                                <div class="text-danger" role="alert">{{ $errors->first('speed') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-special_attack">Đòn
                                            tấn công đặt biệt</label>
                                        <div class="col-sm-10">
                                            <input type="range" class="form-range " name="special_attack"
                                                   id="basic-default-special_attack"
                                                   value="{{ old('special_attack',!empty($data) ? $data->special_attack : '') }}">
                                            @if ($errors->has('special_attack'))
                                                <div class="text-danger" role="alert">{{ $errors->first('special_attack') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-special_defense">Phòng
                                            thủ đặt biệt</label>
                                        <div class="col-sm-10">
                                            <input type="range" class="form-range " name="special_defense"
                                                   id="basic-default-special_defense"
                                                   value="{{ old('special_defense',!empty($data) ? $data->special_defense : '') }}">
                                            @if ($errors->has('special_defense'))
                                                <div class="text-danger" role="alert">{{ $errors->first('special_defense') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /Second column -->

                    <!-- Second column -->
                    <div class="col-12 col-lg-4">
                        <!-- Pricing Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0"></h5>
                            </div>
                            <div class="card-body">
                                <!-- Base Price -->
                                <div class="mb-3">
                                    <label class="form-label" for="pokemon-type">Hệ</label>
                                    <select id="pokemon-type" name="type_id" class="select2 form-select">
                                        @foreach($types as $type)
                                        <option value="{{ $type->id }}" {{ !empty($data) ? $data->id == $type->id ? 'selected' : '' : '' }} >{{$type->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <!-- Discounted Price -->
                                <div class="mb-3">
                                    <label class="form-check m-0">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="form-check-label">Thần Thoại</span>
                                    </label>
                                    <label class="form-check m-0">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="form-check-label">Huyển thoại</span>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-files">Chọn tập tin hình ảnh</label>
                                    <input class="form-control" type="file" id="image-input" name="file">
                                    <div id="image-container"></div>
                                    @if(!empty($data))
                                        <input type="text" hidden name="file" value="{{$data->image}}">
                                             <img
                                                src="{{ asset('storage/uploads')}}/{{  $data->image }}"
                                                class="" width="200" height="160"
                                                alt=""/>
                                            <br>
                                            <a href="" style="text-align: center">Xóa</a>

                                    @endif
                                </div>


                            </div>
                        </div>
                        <!-- /Pricing Card -->
                        <button type="submit" class="btn btn-primary">{{ $isEdit ? 'Chinh sưa' : 'Tạo mới' }}</button>

                    </div>
                    <!-- /Second column -->
                </div>
            </form>

        </div>
    </div>

    <x-slot name="javascript">

        <script>
            $(document).ready(function () {
                $('.select2').select2();

            });
            $(document).ready(function () {
                $('#image-input').change(function () {
                    var formData = new FormData($('#uploadForm')[0]);
                    $.ajax({
                        url: '{{ route("backend.ajax.uploadImage") }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            console.log(response)
                            let html = `<div>
                                    <img src="${response.file}" alt="" width="140" height="160">
                                    <input type="text" hidden name="image" value="${response.file_path}">

                                    </div>`;

                            var img = $('<img>').attr('src', response.file);
                            $('#image-container').append($(html));
                        },
                        error: function (xhr, status, error) {
                            // Xử lý khi gặp lỗi
                        }
                    });
                });
            });
        </script>
    </x-slot>


</x-layouts.backend>
