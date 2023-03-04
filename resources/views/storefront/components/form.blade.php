<div class="section sec-contact">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-5">
                <h2 class="heading">{{__('components.form.title')}}</h2>
                <p class="text-black-50">{{__('components.form.description')}}</p>
            </div>
        </div>
        <form class="row">

            <div class="col-md-6 col-lg-6">
                <div class="mb-3">
                    <label for="name" class="ps-3 mb-2">{{__('components.form.name')}}</label>
                    <input type="text" class="form-control" id="name">
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="mb-3">
                    <label for="email" class="ps-3 mb-2">{{__('components.form.email')}}</label>
                    <input type="text" class="form-control" id="email">
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="mb-3">
                    <label for="phone" class="ps-3 mb-2">{{__('components.form.phone')}}</label>
                    <input type="text" class="form-control" id="phone">
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="mb-3">
                    <label for="subject" class="ps-3 mb-2">{{__('components.form.subject')}}</label>
                    <input type="text" class="form-control" id="subject">
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                <div class="mb-3">
                    <label for="message" class="ps-3 mb-2">{{__('components.form.message')}}</label>
                    <textarea class="form-control" name="" id="message" cols="30" rows="7"></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <input type="submit" value="{{__('components.form.submit')}}" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
