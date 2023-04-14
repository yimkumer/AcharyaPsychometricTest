<?php include('./includes/header.php');  ?>

<div class="container-fluid  py-3">
    <header class="text-center">

        <img src="./assets/img/alogo.png" class="img-fluid " alt="Acharya Institutes">
    </header>
    <div class=" container text-center heading mt-4 p-2 text-light ">
        <h1 class="font-weight-bold">Acharya Psychometric Test </h1>
    </div>
</div>
<section class="container my-2 w-100 mb-4 text-dark p-2 main">
    <form class="row g-3 p-3 " action="submit.php" method="post" onSubmit="fn1()">
        <div name=''></div>
        <div class="col-md-8">
            <label for="validationDefault01" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="validationDefault01" name="sname" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Current Grade/Class</label>
            <input type="text" class="form-control" id="validationDefault02" name="grade" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Stream</label>
            <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="stream" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" required>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Country</label>
            <select class="selectpicker countrypicker form-control" name="country" value=" " data-flag="true"></select>
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Mobile Number</label>
            <br>
            <input type="tel" id="phone" class="form-control" name="phno"  maxlength="10" value="" onkeypress="return /[0-9]/i.test(event.key)" required>


            <script>
                var input = document.querySelector("#phone");
                window.intlTelInput(input, {
                    initialCountry: "uz",
                    separateDialCode: true,
                    excludeCountries: [],
                    preferredCountries: [ "uz","in"]
                });
            </script>
        </div>


        <div class="col-md-12 ">

            <!-- EXTROVERT or INROVERT -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">EXTROVERT or INTROVERT</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd1" name="op1" value="E - I am Outgoing" required>
                            <label class="form-check-label" for="rd1">I am Outgoing</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd2" name="op1" value="I - I am Reserved">
                            <label class="form-check-label" for="rd2">I am Reserved</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd3" name="op2" value="E - I am Relaxed" required>
                            <label class="form-check-label" for="rd3"> I am Relaxed </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd4" name="op2" value="I - I am Intense">
                            <label class="form-check-label" for="rd4">I am Intense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd5" name="op3" value="E - I am Enthusiastic" required>
                            <label class="form-check-label" for="rd5">I am Enthusiastic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd6" name="op3" value="I - I am Aloof">
                            <label class="form-check-label" for="rd6">I am Aloof</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd7" name="op4" value="E - I Speak-out in groups" required>
                            <label class="form-check-label" for="rd7">I Speak-out in groups</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd8" name="op4" value="I - I Absorb information in groups">
                            <label class="form-check-label" for="rd8">I Absorb information in groups</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd9" name="op5" value="E - My Energy grows at parties" required>
                            <label class="form-check-label" for="rd9">My Energy grows at parties</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd10" name="op5" value="I - My Energy wanes at parties">
                            <label class="form-check-label" for="rd10">My Energy wanes at parties</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd11" name="op6" value="E - I have a large group of friends" required>
                            <label class="form-check-label" for="rd11">I have a large group of friends</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd12" name="op6" value="I - I have a select few friends">
                            <label class="form-check-label" for="rd12">I have a select few friends</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd13" name="op7" value="E - I think out loud" required>
                            <label class="form-check-label" for="rd13">I think out loud</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd14" name="op7" value="I - I think within">
                            <label class="form-check-label" for="rd14">I think within</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd15" name="op8" value="E - I look for activity" required>
                            <label class="form-check-label" for="rd15">I look for activity</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd16" name="op8" value="I - I seek for quiet time">
                            <label class="form-check-label" for="rd16">I seek for quiet time</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd17" name="op9" value="E - I like to talk" required>
                            <label class="form-check-label" for="rd17">I like to talk </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd18" name="op9" value="I - I like to listen">
                            <label class="form-check-label" for="rd18">I like to listen</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd19" name="op10" value="E - I share my personal experiences" required>
                            <label class="form-check-label" for="rd19">I share my personal experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd20" name="op10" value="I - I am unapproachable">
                            <label class="form-check-label" for="rd20">I am unapproachable</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd21" name="op11" value="E - I like new experiences" required>
                            <label class="form-check-label" for="rd21">I like new experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd22" name="op11" value="I - I like stability in my inner life">
                            <label class="form-check-label" for="rd22">I like stability in my inner life</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd23" name="op12" value="E - I want to be with people" required>
                            <label class="form-check-label" for="rd23">I want to be with people</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd24" name="op12" value="I - I take a detached approach">
                            <label class="form-check-label" for="rd24">I take a detached approach</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd25" name="op13" value="E - I am influenced by external opinions" required>
                            <label class="form-check-label" for="rd25">I am influenced by external opinions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd26" name="op13" value="I - i am inner directed">
                            <label class="form-check-label" for="rd26">I am inner directed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd27" name="op14" value="E - I show emotions" required>
                            <label class="form-check-label" for="rd27">I show emotions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd28" name="op14" value="I - I exercise restraint">
                            <label class="form-check-label" for="rd28">I exercise restraint</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd29" name="op15" value="E - I respond quickly" required>
                            <label class="form-check-label" for="rd29">I respond quickly</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd30" name="op15" value="I - I respond carefully">
                            <label class="form-check-label" for="rd30">I respond carefully</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- SENSING or INTUTION  -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">SENSING or INTUITION</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd31" name="op16" value="S - I am Realistic" required>
                            <label class="form-check-label" for="rd31">I am Realistic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd32" name="op16" value="I - I am Inspirational">
                            <label class="form-check-label" for="rd32">I am Inspirational</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd33" name="op17" value="S - I like Routine" required>
                            <label class="form-check-label" for="rd33"> I like Routine </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd34" name="op17" value="I - I like Variety">
                            <label class="form-check-label" for="rd34">I like Variety</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd35" name="op18" value="S - I think about facts" required>
                            <label class="form-check-label" for="rd35">I think about facts</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd36" name="op18" value="I - I think about possibilities">
                            <label class="form-check-label" for="rd36">I think about possibilities</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd37" name="op19" value="S - I like Precision" required>
                            <label class="form-check-label" for="rd37">I like Precision</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd38" name="op19" value="I - I like Brainstorming">
                            <label class="form-check-label" for="rd38">I like Brainstorming</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd39" name="op20" value="S - I am concerned with the present" required>
                            <label class="form-check-label" for="rd39">I am concerned with the present</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd40" name="op20" value="I - I am concerned with the future">
                            <label class="form-check-label" for="rd40">I am concerned with the future</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd41" name="op21" value="S - I use my five senses" required>
                            <label class="form-check-label" for="rd41">I use my five senses</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd42" name="op21" value="I - I rely on my sixth sense">
                            <label class="form-check-label" for="rd42">I rely on my sixth sense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd43" name="op22" value="S - My feet are on the ground" required>
                            <label class="form-check-label" for="rd43">My feet are on the ground</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd44" name="op22" value="I - My head is in the clouds">
                            <label class="form-check-label" for="rd44">My head is in the clouds</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd45" name="op23" value="S - My mind is Literal" required>
                            <label class="form-check-label" for="rd45">My mind is Literal</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd46" name="op23" value="I - My mind is Symbolic">
                            <label class="form-check-label" for="rd46">My mind is Symbolic</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd47" name="op24" value="S - I make direct statements" required>
                            <label class="form-check-label" for="rd47">I make direct statements </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd48" name="op24" value="I - I make allegorical statements">
                            <label class="form-check-label" for="rd48">I make allegorical statements</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd49" name="op25" value="S - I pay attention to basics" required>
                            <label class="form-check-label" for="rd49">I pay attention to basics</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd50" name="op25" value="I - I pay attention to overtones">
                            <label class="form-check-label" for="rd50">I pay attention to overtones</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd51" name="op26" value="S - I use learned skills" required>
                            <label class="form-check-label" for="rd51">I use learned skills</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd52" name="op26" value="I - I acquire new skills">
                            <label class="form-check-label" for="rd52">I acquire new skills</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd53" name="op27" value="S - My focus is on reality" required>
                            <label class="form-check-label" for="rd53">My focus is on reality</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd54" name="op27" value="I - My focus is on inspiration">
                            <label class="form-check-label" for="rd54">My focus is on inspiration</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd55" name="op28" value="S - I am steadfast" required>
                            <label class="form-check-label" for="rd55">I am steadfast</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd56" name="op28" value="I - I am mercurial">
                            <label class="form-check-label" for="rd56">I am mercurial</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd57" name="op29" value="S - I work on solving problems" required>
                            <label class="form-check-label" for="rd57">I work on solving problems</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd58" name="op29" value="I - I discover problems">
                            <label class="form-check-label" for="rd58">I discover problems</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd59" name="op30" value="S - I like details" required>
                            <label class="form-check-label" for="rd59">I like details</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd60" name="op30" value="I - I like the big picture">
                            <label class="form-check-label" for="rd60">I like the big picture</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- THINKING or FEELING -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">THINKING or FEELING</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd61" name="op31" value="T - I am logical and analytical" required>
                            <label class="form-check-label" for="rd61">I am logical and analytical</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd62" name="op31" value="F - I have a personal value orientation">
                            <label class="form-check-label" for="rd62">I have a personal value orientation</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd63" name="op32" value="T - I am Critical" required>
                            <label class="form-check-label" for="rd63"> I am Critical </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd64" name="op32" value="F - I am Pleasant">
                            <label class="form-check-label" for="rd64">I am Pleasant</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd65" name="op33" value="T - I am firm on policy" required>
                            <label class="form-check-label" for="rd65">I am firm on policy</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd66" name="op33" value="F - I bend the rules">
                            <label class="form-check-label" for="rd66">I bend the rules</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd67" name="op34" value="T - I have an impersonal orientation to problems" required>
                            <label class="form-check-label" for="rd67">I have an impersonal orientation to problems</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd68" name="op34" value="F - I have strong personal involvement in problems">
                            <label class="form-check-label" for="rd68">I have strong personal involvement in problems</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd69" name="op35" value="T - I am direct" required>
                            <label class="form-check-label" for="rd69">I am direct</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd70" name="op35" value="F - I am tactful">
                            <label class="form-check-label" for="rd70">I am tactful</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd71" name="op36" value="T - I show justice" required>
                            <label class="form-check-label" for="rd71">I show justice</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd72" name="op36" value="F - I show mercy">
                            <label class="form-check-label" for="rd72">I show mercy</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd73" name="op37" value="T - I am hard-headed" required>
                            <label class="form-check-label" for="rd73">I am hard-headed</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd74" name="op37" value="F - I am soft-minded">
                            <label class="form-check-label" for="rd74">I am soft-minded</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd75" name="op38" value="T - I am far-minded" required>
                            <label class="form-check-label" for="rd75">I am far-minded</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd76" name="op38" value="F - I am sympathetic">
                            <label class="form-check-label" for="rd76">I am sympathetic</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd77" name="op39" value="T - I focus on ideas" required>
                            <label class="form-check-label" for="rd77">I focus on ideas </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd78" name="op39" value="F - I focus on ideals">
                            <label class="form-check-label" for="rd78">I focus on ideals</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd79" name="op40" value="T - I am firm" required>
                            <label class="form-check-label" for="rd79">I am firm</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd80" name="op40" value="F - I am gentle">
                            <label class="form-check-label" for="rd80">I am gentle</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd81" name="op41" value="T - I am unaffected by atmosphere" required>
                            <label class="form-check-label" for="rd81">I am unaffected by atmosphere</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd82" name="op41" value="F - I am tuned into atmosphere">
                            <label class="form-check-label" for="rd82">I am tuned into atmosphere</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd83" name="op42" value="T - I concentrate on the task" required>
                            <label class="form-check-label" for="rd83">I concentrate on the task</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd84" name="op42" value="F - I concentrate on the relationship">
                            <label class="form-check-label" for="rd84">I concentrate on the relationship</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd85" name="op43" value="T - I prefer the honest truth" required>
                            <label class="form-check-label" for="rd85">I prefer the honest truth</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd86" name="op43" value="F - I avoid unpleasantness">
                            <label class="form-check-label" for="rd86">I avoid unpleasantness</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd87" name="op44" value="T - I am upset by illogic" required>
                            <label class="form-check-label" for="rd87">I am upset by illogic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd88" name="op44" value="F - I accept illogic">
                            <label class="form-check-label" for="rd88">I accept illogic</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd89" name="op45" value="T - I am tuned into designs" required>
                            <label class="form-check-label" for="rd89">I am tuned into designs</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd90" name="op45" value="F - I am tuned into people">
                            <label class="form-check-label" for="rd90">I am tuned into people</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- JUDGING or PERCEPTION -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">JUDGING or PERCEPTION</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd91" name="op46" value="J - I am deliberate" required>
                            <label class="form-check-label" for="rd91">I am deliberate</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd92" name="op46" value="P - I am spontaneous">
                            <label class="form-check-label" for="rd92">I am spontaneous</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd93" name="op47" value="J - I prefer structure" required>
                            <label class="form-check-label" for="rd93"> I prefer structure </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd94" name="op47" value="P - I prefer to be unstructured">
                            <label class="form-check-label" for="rd94">I prefer to be unstructured</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd95" name="op48" value="J - I am decisive" required>
                            <label class="form-check-label" for="rd95">I am decisive</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd96" name="op48" value="P - I am cautious">
                            <label class="form-check-label" for="rd96">I am cautious</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd97" name="op49" value="J - I am opinionated" required>
                            <label class="form-check-label" for="rd97">I am opinionated</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd98" name="op49" value="P - I am open-minded">
                            <label class="form-check-label" for="rd98">I am open-minded</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd99" name="op50" value="J - I persevere" required>
                            <label class="form-check-label" for="rd99">I persevere</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd100" name="op50" value="P - I procrastinate">
                            <label class="form-check-label" for="rd100">I procrastinate</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd101" name="op51" value="J - I am organized and systematic" required>
                            <label class="form-check-label" for="rd101">I am organized and systematic </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd102" name="op51" value="P - I am flexible">
                            <label class="form-check-label" for="rd102">I am flexible</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd103" name="op52" value="J - I am self-regimented" required>
                            <label class="form-check-label" for="rd103">I am self-regimented</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd104" name="op52" value="P - I am open-minded">
                            <label class="form-check-label" for="rd104">I am open-ended</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd105" name="op53" value="J - I am punctual" required>
                            <label class="form-check-label" for="rd105">I am punctual </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd106" name="op53" value="P - I am relaxed">
                            <label class="form-check-label" for="rd106">I am relaxed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd107" name="op54" value="J - I am systematic" required>
                            <label class="form-check-label" for="rd107">I am systematic </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd108" name="op54" value="P - I am impulsive">
                            <label class="form-check-label" for="rd108">I am impulsive </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd109" name="op55" value="J - I aim to be right" required>
                            <label class="form-check-label" for="rd109">I aim to be right </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd110" name="op55" value="P - I accept being wrong">
                            <label class="form-check-label" for="rd110">I accept being wrong </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd111" name="op56" value="J - I am geared to morality" required>
                            <label class="form-check-label" for="rd111">I am geared to morality </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd112" name="op56" value="P - I am geared to existential">
                            <label class="form-check-label" for="rd112">I am geared to existential </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd113" name="op57" value="J - I am critical" required>
                            <label class="form-check-label" for="rd113">I am critical </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd114" name="op57" value="P - I consent">
                            <label class="form-check-label" for="rd114">I consent </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd115" name="op58" value="J - I live up-to standards" required>
                            <label class="form-check-label" for="rd115">I live up-to standards </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd116" name="op58" value="P - I am open to new experiences">
                            <label class="form-check-label" for="rd116">I am open to new experiences </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd117" name="op59" value="J - I have enduring friendships" required>
                            <label class="form-check-label" for="rd117">I have enduring friendships </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd118" name="op59" value="P - I have easy acquaintanceships">
                            <label class="form-check-label" for="rd118"> I have easy acquaintanceships </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd119" name="op60" value="J - I live to plan" required>
                            <label for="rd119" class="form-check-label">I live to plan</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd120" name="op60" value="P - I like unplanned activities">
                            <label class="form-check-label" for="rd120">I like unplanned activities</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
        </div>
        
<div class="col-md-12  text-center">
    <!-- <input type="submit" name="Submit" value="SUBMIT" class="btn btn-primary " onclick="fn1()"> -->
    <button class="bn30 " id="btn1"> Submit </button>
</div>
</section>


</div>









</form>
</section>


<?php include('./includes/footer.php');  ?>