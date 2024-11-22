<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
?>

<div class="navbar_all">
    <div class="logo"></div>
    <button id="toggleButton">
        <i class="fa-solid fa-bars-staggered"></i> Menu
    </button>
   
    <div class="mobile">
        <div class="logo"></div>
        <div class="dashed"></div>
        <a href="massage_services.php" class="<?= $current_page === 'massage_services.php' ? 'active' : '' ?>">Massage</a>
        <a href="sauna.php" class="<?= $current_page === 'sauna.php' ? 'active' : '' ?>">Sauna</a>
        <a href="detox.php" class="<?= $current_page === 'detox.php' ? 'active' : '' ?>">Detox</a>
        <a href="facial.php" class="<?= $current_page === 'facial.php' ? 'active' : '' ?>">Facial</a>
        <a href="teeth_whitening.php" class="<?= $current_page === 'teeth_whitening.php' ? 'active' : '' ?>">Teeth Whitening</a>

    </div>
</div>


<script>
    // Get the button and sidebar elements
    var toggleButton = document.getElementById("toggleButton");
    var sidebar = document.querySelector(".mobile");
    var icon = toggleButton.querySelector("i");

    // Add click event listener to the button
    toggleButton.addEventListener("click", function() {
        // Toggle the visibility of the sidebar
        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "flex";
            sidebar.style.flexDirection = "column";
            icon.classList.remove("fa-bars-staggered");
            icon.classList.add("fa-xmark");
        } else {
            sidebar.style.display = "none";
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars-staggered");
        }
    });
</script>