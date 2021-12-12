<div class="background">
    <div class="main">
        <div class="card">
            <div class="card-body">
                <h1 class="display-6">Unique Image Gallery</h1>
                <p class="lead text-center">
                    <?php
                        $quotes = array(
                            "Be the first to claim your image.",
                            "Please pick your images reasonably.",
                            "Better for the enviroment.",
                            "You better not pick anything bad!",
                            "Did someone take your image already?",
                            "Probably not worth millions of dollars.",
                            "Blockchains are a thing of the past."
                        );
                        print($quotes[rand(0, count($quotes) - 1)]);
                    ?>
                </p>
                <hr>
                <button type="button" class="btn btn-success btn-lg w-100">Random</button>
                <hr>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email..." />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password..." />
                    </div>
                </form>
                <div class="container">
                    <div class="row">
                        <div class="col nopadding" style="padding-right:4px !important">
                            <button type="button" class="btn btn-primary btn-lg w-100">Login</button>
                        </div>
                        <div class="col nopadding" style="padding-left:4px !important">
                            <button type="button" class="btn btn-primary btn-lg w-100">Signup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>