<?php get_header();

function first($name, $age)
{
    echo "<p>My name is $name and I am $age</p>";
}


?>

<?php echo 2 + 2;
$myName = 'John' ?>

<p>This is a test <?php echo $myName ?></p>
<p>Subtitle <?php echo $myName ?></p>

<p> <?php echo first('Jane', 33); ?></p>
<p><?php echo first('John', 22); ?></p>

<h1> <?php bloginfo('name'); ?></h1>
<p> <?php bloginfo('description'); ?></p>

<?php
while (have_posts()) {
    the_post();
?>
    <h2> <a href="<?php the_permalink() ?>"><?php the_title() ?>
        </a>
    </h2>
    <?php the_content() ?>

    <hr>

<?php }
get_footer()
?>