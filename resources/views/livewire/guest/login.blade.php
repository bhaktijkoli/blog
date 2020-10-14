<div class="container" style="margin-top: 100px">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h5>Login</h5>
                </div>
                <div class="card-body">
                    @if ($hasError === true)
                    <div class="alert alert-danger">
                        <span>Invalid email or password</span>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" wire:model="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" wire:model="password">
                    </div>
                    <button class="btn btn-primary btn-block" wire:click="submit">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
