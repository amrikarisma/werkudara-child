<div class="section-element section-team-detail" id="list-team" data-section-name="list-team">
    <div class="container">
        <div class="wrapper-section-team core">
            <div class="row no-gutters">
                <?php if (have_rows('team')) : ?>
                    <?php while (have_rows('team')) : the_row(); ?>
                        <div class="col-6 col-lg">
                            <?php $image = get_sub_field('image'); ?>
                            <div class="item-team" data-href='#<?php echo getIdFromTitle(get_sub_field('title')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo esc_url($image['url'] ?? ''); ?>');">
                                <div class="overlay">

                                </div>
                                <div class="box-content-item-team">
                                    <div class="name"><?php the_sub_field('title'); ?></div>
                                    <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                    <div class="caption"><?php the_sub_field('caption'); ?></div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="col-md-7">
                    <div class="wrap-title-section">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <div class="subtitle">
                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="wrapper-section-team">
            <div class="row no-gutters">
                <?php if (have_rows('team')) : ?>
                    <?php while (have_rows('team')) : the_row(); ?>
                        <?php if (have_rows('list')) : ?>
                            <?php while (have_rows('list')) : the_row(); ?>
                                <?php if (get_row_layout() == 'staff') : ?>
                                    <div class="col-6 col-md-2">
                                        <?php $image = get_sub_field('image'); ?>
                                        <div class="item-team" data-href='#<?php echo getIdFromTitle(get_sub_field('division')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo esc_url($image['url'] ?? ''); ?>');">
                                            <div class="overlay">
                                            </div>
                                            <div class="box-content-item-team">
                                                <div class="name"><?php the_sub_field('title'); ?></div>
                                                <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

    </div>

</div>
<?php if (have_rows('team')) : ?>
    <?php while (have_rows('team')) : the_row(); ?>
        <?php $image = get_sub_field('image'); ?>

        <div class="section-element wrapper-section-detail-item-team staff-detail" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
            <div class="card">
                <div class="close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item-team active" data-href='#<?php echo getIdFromTitle(get_sub_field('title')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo esc_url($image['url'] ?? ''); ?>');">
                                <div class="overlay">
                                </div>
                                <div class="box-content-item-team">
                                    <div class="name"><?php the_sub_field('title'); ?></div>
                                    <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                    <div class="caption"><?php the_sub_field('caption'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="content-detail-item-team">
                                <div class="tag">
                                    <span class="badge badge-pill badge-primary">BOD</span>
                                </div>
                                <div class="name"><?php the_sub_field('title'); ?></div>
                                <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                <div class="description">
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                                <div class="certificate">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="title-certificate">Certificate</div>
                                        </div>
                                        <div class="col">
                                            <?php if (have_rows('specialities')) : ?>
                                                <ul>
                                                    <?php while (have_rows('specialities')) : the_row(); ?>
                                                        <li><?php the_sub_field('title'); ?></li>
                                                    <?php endwhile; ?>

                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (have_rows('list')) : ?>
            <?php while (have_rows('list')) : the_row(); ?>

                <?php if (get_row_layout() == 'staff') : ?>
                    <div class="section-element wrapper-section-detail-item-team staff-detail" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
                        <div class="card">
                            <div class="close-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php $image = get_sub_field('image'); ?>
                                        <div class="item-team active" data-href='#<?php echo getIdFromTitle(get_sub_field('title')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo esc_url($image['url'] ?? ''); ?>');">
                                            <div class="overlay">
                                            </div>
                                            <div class="box-content-item-team">
                                                <div class="name"><?php the_sub_field('title'); ?></div>
                                                <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                                <div class="caption"><?php the_sub_field('caption'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="content-detail-item-team">
                                            <div class="tag">
                                                <span class="badge badge-pill badge-primary">BOD</span>
                                            </div>
                                            <div class="name"><?php the_sub_field('title'); ?></div>
                                            <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                            <div class="description">
                                                <p><?php the_sub_field('description'); ?></p>
                                            </div>
                                            <div class="certificate">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="title-certificate">Certificate</div>
                                                    </div>
                                                    <div class="col">
                                                        <?php if (have_rows('specialities')) : ?>
                                                            <ul>
                                                                <?php while (have_rows('specialities')) : the_row(); ?>
                                                                    <li><?php the_sub_field('title'); ?></li>
                                                                <?php endwhile; ?>

                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-element wrapper-section-detail-item-team division" id="<?php echo getIdFromTitle(get_sub_field('division')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('division')); ?>">
                        <div class="card">
                            <div class="close-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="content-detail-item-team">
                                            <div class="tag">
                                                <span class="badge badge-pill badge-primary">SO Departement</span>
                                            </div>
                                            <div class="division"><?php the_sub_field('division'); ?></div>
                                            <div class="description">
                                                <p><?php the_sub_field('description'); ?></p>
                                            </div>
                                            <div class="certificate">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="title-certificate">Speciality</div>
                                                    </div>
                                                    <div class="col">
                                                        <?php if (have_rows('specialities')) : ?>
                                                            <ul>
                                                                <?php while (have_rows('specialities')) : the_row(); ?>
                                                                    <li><?php the_sub_field('title'); ?></li>
                                                                <?php endwhile; ?>

                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrapper-content-item-team">
                                            <div class="row no-gutters">
                                                <div class="col-6 col-md-3">
                                                    <?php $image = get_sub_field('image'); ?>
                                                    <div class="item-team" data-href='#<?php echo getIdFromTitle(get_sub_field('title')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo esc_url($image['url'] ?? ''); ?>');">
                                                        <div class="overlay">

                                                        </div>
                                                        <div class="box-content-item-team">
                                                            <div class="name"><?php the_sub_field('title'); ?></div>
                                                            <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if (have_rows('list_staff')) : ?>
                                                    <?php while (have_rows('list_staff')) : the_row(); ?>
                                                        <?php if (get_row_layout() == 'staff') : ?>
                                                            <div class="col-6 col-md-3">
                                                                <?php $image = get_sub_field('image'); ?>

                                                                <div class="item-team" data-href='#<?php echo getIdFromTitle(get_sub_field('title')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Linda.jpg');">
                                                                    <div class="overlay">

                                                                    </div>
                                                                    <div class="box-content-item-team">
                                                                        <div class="name"><?php the_sub_field('title'); ?></div>
                                                                        <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (have_rows('list_staff')) : ?>
                        <?php while (have_rows('list_staff')) : the_row(); ?>
                            <?php if (get_row_layout() == 'staff') : ?>
                                <div class="section-element wrapper-section-detail-item-team staff-detail" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
                                    <div class="card">
                                        <div class="close-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                                            </svg>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php $image = get_sub_field('image'); ?>
                                                    <div class="item-team active" data-href='#<?php echo getIdFromTitle(get_sub_field('title')); ?>' style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo esc_url($image['url'] ?? ''); ?>');">
                                                        <div class="overlay">
                                                        </div>
                                                        <div class="box-content-item-team">
                                                            <div class="name"><?php the_sub_field('title'); ?></div>
                                                            <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                                            <div class="caption"><?php the_sub_field('caption'); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="content-detail-item-team">
                                                        <div class="tag">
                                                            <span class="badge badge-pill badge-primary">BOD</span>
                                                        </div>
                                                        <div class="name"><?php the_sub_field('title'); ?></div>
                                                        <div class="position"><?php the_sub_field('subtitle'); ?></div>
                                                        <div class="description">
                                                            <p><?php the_sub_field('description'); ?></p>
                                                        </div>
                                                        <div class="certificate">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="title-certificate">Certificate</div>
                                                                </div>
                                                                <div class="col">
                                                                    <?php if (have_rows('specialities')) : ?>
                                                                        <ul>
                                                                            <?php while (have_rows('specialities')) : the_row(); ?>
                                                                                <li><?php the_sub_field('title'); ?></li>
                                                                            <?php endwhile; ?>

                                                                        </ul>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- <div class="section-element wrapper-section-detail-item-team" id="gusti" data-section-name="gusti">
    <div class="card">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
            </svg>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="item-team active" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Bagus.jpg');
                                                ">
                        <div class="overlay">

                        </div>
                        <div class="box-content-item-team">
                            <div class="name">I Gusti Putu Yaktianuraga</div>
                            <div class="position">Managing Director</div>
                            <div class="caption">"You can’t wait until life isnt hard anymore before you decide to be happy"</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="content-detail-item-team">
                        <div class="tag">

                            <span class="badge badge-pill badge-primary">BOD</span>

                        </div>
                        <div class="name">I Gusti Putu Yaktianuraga</div>
                        <div class="position">Managing Director</div>

                        <div class="description">
                            <p>A result-driven and resourceful managing director with a proven ability to develop and strengthen management teams in order to maximize company profitability and efficiency. Possessing a clear focus on high quality and business profit, as well as excellent communication skills and able to establish sustainable and profitable relationships with customers, suppliers and stakeholders. Responsible for the day-to-day running of the business.</p>
                        </div>
                        <div class="certificate">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="title-certificate">Specialities</div>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>Sales & Marketing</li>
                                        <li>Operation Management</li>
                                        <li>Man-management</li>
                                        <li>Destination Marketing</li>
                                        <li>MICE Marketing</li>
                                        <li>Revenue Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-element wrapper-section-detail-item-team" id="adiel" data-section-name="adiel">
    <div class="card">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
            </svg>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="content-detail-item-team">
                        <div class="tag">

                            <span class="badge badge-pill badge-primary">SO Departement</span>

                        </div>
                        <div class="division">TOUR & EVENT PLANNING</div>
                        <div class="description">
                            <p>Positive thinkers. Love to just do it first, work on it rather than dwell with its difficulty and hassle. Believe challenge & obstacle is a sign that we are heading the right way and a step to improve ourselves. The ability to swiftly handling product development through research, base cost & sales management perspective is proven by his experience on the industry.
                            </p>
                        </div>
                        <div class="certificate">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="title-certificate">Speciality</div>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>Sales & Marketing</li>
                                        <li>Operation Management, Man-management</li>
                                        <li>Destination Marketing</li>
                                        <li>MICE Marketing</li>
                                        <li>Revenue Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-content-item-team">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="item-team active" data-href="#adiel" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Adiel.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Adiel Priyarama</div>
                                        <div class="position">Senior Manager of Tour & Event Planing</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Linda.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Linda Susanto</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Zudi.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Zudi Saputro</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Fadli.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Gusti Bagus Rendika</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-element wrapper-section-detail-item-team" id="nofri" data-section-name="nofri">
    <div class="card">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
            </svg>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="content-detail-item-team">
                        <div class="tag">

                            <span class="badge badge-pill badge-primary">SO Departement</span>

                        </div>
                        <div class="division">SALES OPERATION</div>
                        <div class="description">
                            <p>Nofri, definitely a huge believer of teamwork, who works alongside the team and business partners to achieve the success of our clients' dreams, with his strong background on man management and project operation.</p>
                        </div>
                        <div class="certificate">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="title-certificate">Speciality</div>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>MICE Assesor</li>
                                        <li>MICE Trainer</li>
                                        <li>Travel Consultant</li>
                                        <li>Venue Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-content-item-team">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="item-team active" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Nofri.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Nofri Sanjaya</div>
                                        <div class="position">Sales Operation Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Linda.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Linda Susanto</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Zudi.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Zudi Saputro</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Fadli.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Gusti Bagus Rendika</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-element wrapper-section-detail-item-team" id="yulia" data-section-name="yulia">
    <div class="card">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
            </svg>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="content-detail-item-team">
                        <div class="tag">

                            <span class="badge badge-pill badge-primary">SO Departement</span>

                        </div>
                        <div class="division">SALES OPERATION</div>
                        <div class="description">
                            <p>Nofri, definitely a huge believer of teamwork, who works alongside the team and business partners to achieve the success of our clients' dreams, with his strong background on man management and project operation.</p>
                        </div>
                        <div class="certificate">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="title-certificate">Speciality</div>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>MICE Assesor</li>
                                        <li>MICE Trainer</li>
                                        <li>Travel Consultant</li>
                                        <li>Venue Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-content-item-team">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="item-team active" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Nofri.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Nofri Sanjaya</div>
                                        <div class="position">Sales Operation Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Linda.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Linda Susanto</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Zudi.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Zudi Saputro</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item-team" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/uploads/2021/08/Fadli.jpg');
                                                ">
                                    <div class="overlay">

                                    </div>
                                    <div class="box-content-item-team">
                                        <div class="name">Gusti Bagus Rendika</div>
                                        <div class="position">Sales Operation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->