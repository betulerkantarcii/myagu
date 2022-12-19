@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.academics-administration.actions.edit', ['name' => $academicsAdministration->title]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <academics-administration-form
                :action="'{{ $academicsAdministration->resource_url }}'"
                :data="{{ $academicsAdministration->toJsonAllLocales() }}"
                :locales="{{ json_encode($locales) }}"
                :send-empty-locales="false"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.academics-administration.actions.edit', ['name' => $academicsAdministration->title]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.academics-administration.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </academics-administration-form>

        </div>
    
</div>

@endsection