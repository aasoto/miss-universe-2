<div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
    <div class="container z-10">
        <div class="flex flex-wrap mt-0 -mx-3">
            <div class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                <div
                    class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                        <x-login.index.header-form title="¡Bienvenidos!"
                            message="Ingrese su correo electronico y contraseña"></x-login.index.header-form>
                    </div>
                    <div class="flex-auto p-6">
                        <x-login.index.form />
                    </div>
                    <div
                        class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                        <x-login.index.create-new-account>
                            ¿Acaso no tienes una cuenta?
                        </x-login.index.create-new-account>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                <x-login.index.rightImage />
            </div>
        </div>
    </div>
</div>
