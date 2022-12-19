@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.manage-course.actions.edit', ['name' => $manageCourse->title]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <manage-course-form
                :action="'{{ $manageCourse->resource_url }}'"
                :data="{{ $manageCourse->toJsonAllLocales() }}"
                :locales="{{ json_encode($locales) }}"
                :send-empty-locales="false"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.manage-course.actions.edit', ['name' => $manageCourse->title]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.manage-course.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </manage-course-form>

        </div>
    
</div>

@endsection