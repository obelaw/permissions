<div>
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Permissions
                    </div>
                    <h2 class="page-title">
                        Permissions List
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <form class="card" wire:submit.prevent="submit">
                <div class="card-header">
                    <h3 class="card-title">Select Permissions</h3>
                    <div class="card-actions">
                        {{--  --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row row-cols-3">
                        @foreach ($ACls as $module => $sections)
                            <div class="col">
                                <div class="mb-3">
                                    <div class="form-label">
                                        <input wire:model.defer="permissions" name="permissions"
                                            class="form-check-input" type="checkbox" value="{{ $module }}">
                                        {{ $module }}
                                    </div>
                                    <div style="padding-left: 21px">
                                        @foreach ($sections as $section => $permissions)
                                            <label class="form-check">
                                                <input wire:model.defer="permissions" name="permissions"
                                                    class="form-check-input" type="checkbox"
                                                    value="{{ $section }}">
                                                <span class="form-check-label">{{ $section }}</span>
                                            </label>
                                            <div style="padding-left: 21px">
                                                @foreach ($permissions as $permission)
                                                    <label class="form-check">
                                                        <input wire:model.defer="permissions" name="permissions"
                                                            class="form-check-input" type="checkbox"
                                                            value="{{ $permission }}">
                                                        <span class="form-check-label">{{ $permission }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
