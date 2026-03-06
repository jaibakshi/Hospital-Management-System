  <!-- Main Content -->
            <div class="col-md-10 p-4">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    @if(auth()->check())

                    <h1>Welcome, {{ auth()->user()->name }} 👋</h1>
                    <div>
                    @endif
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile">
                    </div>
                </div>

