<?php get_header(); ?>

<div class="page-wrapper page">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
        <div class="main-content">
            <div class="card">
                <p>
                    There are many variations of <strong> of Lorem Ipsum available, but the majority have suffered alteration</strong> in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p>
                <div class="important-text-box green">“An important sentence that should be emphasized to the reader! This is up to 4 lines. Read agian: an important sentence that should be emphasized to the reader. This is up to 4 lines!”</div>
                <div class="important-text-box yellow">A notice that clients have to know about the service / article.</div>

            </div>

            <div class="card service-faq">
                <div class="description-title">
                    <div class="description-title-image" style="background-image: url(<?php echo theme_uri('assets/image/services.png') ?>);"></div>
                    <div class="description-title-text">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="faq-box">
                    <!-- first question must be open and other must be close -->
                    <!-- classes => [close, open] -->
                    <div class="single-faq open">
                        <div class="icon-box">
                            <span class="faq-collapse-icon"></span>
                        </div>
                        <div class="text-box">
                            <div class="question">
                                <h4>First Question?</h4>
                            </div>
                            <div class="answer">
                                <p>
                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- classes => [close, open] -->
                    <div class="single-faq close">
                        <div class="icon-box">
                            <span class="faq-collapse-icon"></span>
                        </div>
                        <div class="text-box">
                            <div class="question">
                                <h4>Do I Have Another Question?</h4>
                            </div>
                            <div class="answer">
                                <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- classes => [close, open] -->
                    <div class="single-faq close">
                        <div class="icon-box">
                            <span class="faq-collapse-icon"></span>
                        </div>
                        <div class="text-box">
                            <div class="question">
                                <h4>Do I Have Another Question?</h4>
                            </div>
                            <div class="answer">
                                <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- classes => [close, open] -->
                    <div class="single-faq close">
                        <div class="icon-box">
                            <span class="faq-collapse-icon"></span>
                        </div>
                        <div class="text-box">
                            <div class="question">
                                <h4>Do I Have Another Question?</h4>
                            </div>
                            <div class="answer">
                                <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>