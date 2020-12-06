<section id="showtimes">
    <div class="container">
        <header class="section-header">
            <h3>Расписания занятий кванториума 42 Новокузнецк</h3>
        </header>
        <div class="accordion" id="accordionExample">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#timetableShowAll" aria-expanded="true" aria-controls="timetableShowAll">
                        <div class="col text-center">
                            <i class="fa fa-mouse">Нажмите что бы просмотреть</i>
                        </div>
                    </button>
                </h2>
            </div>

            <div id="timetableShowAll" class="collapse" aria-labelledby="headingOne" data-parent="#timetableShowAll">
                <div class="card-body">
                    @include('timetables.showtimes')
                </div>
            </div>
        </div>
    </div>
</section>
