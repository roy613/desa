<style>
    .timeline {
        border-left: 3px solid #727cf5;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        background: rgba(114, 124, 245, 0.09);
        margin: 0 auto;
        letter-spacing: 0.2px;
        position: relative;
        line-height: 1.4em;
        font-size: 1.03em;
        padding: 50px;
        list-style: none;
        text-align: left;
        max-width: 98%;
    }

    @media (max-width: 767px) {
        .timeline {
            max-width: 98%;
            padding: 25px;
        }
    }

    .timeline h1 {
        font-weight: 300;
        font-size: 1.4em;
    }

    .timeline h2,
    .timeline h3 {
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 8px;
    }

    .timeline .event {
        border-bottom: 1px dashed #e8ebf1;
        padding-top: 22px;
        padding-bottom: 10px;
        margin-bottom: 5px;
        position: relative;
    }

    @media (max-width: 767px) {
        .timeline .event {
            padding-top: 30px;
        }
    }

    .timeline .event:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }

    .timeline .event:before,
    .timeline .event:after {
        position: absolute;
        display: block;
        top: 0;
    }

    .timeline .event:before {
        left: 0px;
        content: attr(data-date);
        /* text-align: right; */
        font-weight: 100;
        font-size: 0.9em;
        min-width: 120px;
        text-align: left;
    }

    @media (max-width: 767px) {
        .timeline .event:before {
            left: 0px;
            text-align: left;
        }
    }

    .timeline .event:after {
        -webkit-box-shadow: 0 0 0 3px #727cf5;
        box-shadow: 0 0 0 3px #727cf5;
        left: -55.8px;
        background: #fff;
        border-radius: 50%;
        height: 9px;
        width: 9px;
        content: "";
        top: 5px;
    }

    @media (max-width: 767px) {
        .timeline .event:after {
            left: -31.8px;
        }
    }

    .rtl .timeline {
        border-left: 0;
        text-align: right;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 4px;
        border-top-left-radius: 4px;
        border-right: 3px solid #727cf5;
    }

    .rtl .timeline .event::before {
        left: 0;
        right: -170px;
    }

    .rtl .timeline .event::after {
        left: 0;
        right: -55.8px;
    }
</style>

<div class="modal fade" id="ceksurat" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Silahkan masukkan kode pelayanan anda
                </p>
                <div class="container">
                    <h4>------</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="content">
                                <ul class="timeline">
                                    <li class="event" data-date="12:30 - 1:00pm">
                                        <h3>Registration</h3>
                                        <p>Get here on time</p>
                                    </li>
                                    <li class="event" data-date="2:30 - 4:00pm">
                                        <h3>Opening Ceremony</h3>
                                        <p>Get ready for </p>
                                    </li>
                                    <li class="event" data-date="5:00 - 8:00pm">
                                        <h3>Main Event</h3>
                                        <p>This is where </p>
                                    </li>
                                    <li class="event" data-date="8:30 - 9:30pm">
                                        <h3>Closing Ceremony</h3>
                                        <p>See how is the</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
    </div>
</div>
</div>



<script>
    function ceksurat() {
        $('#ceksurat').modal('show');
    }
</script>