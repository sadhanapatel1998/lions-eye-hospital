<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$siteUrl = "https://lionseyehospital.net";

$seoData = [

    "index.php" => [
        "title" => "Lions Eye Hospital Ghaziabad | Expert Eye Care & Treatment",
        "description" => "Lions Eye Hospital, Ghaziabad provides comprehensive eye care including cataract, retina surgery, glaucoma diagnosis, diabetic eye care, eye check-ups and spectacles.",
        "keywords" => "Lions Eye Hospital Ghaziabad, eye hospital Ghaziabad, eye care Ghaziabad, cataract treatment Ghaziabad, retina surgery Ghaziabad, glaucoma treatment Ghaziabad, diabetic eye care",
        "robots" => "index, follow"
    ],

    "about-us.php" => [
        "title" => "About Lions Eye Hospital Ghaziabad | Trusted Eye Care",
        "description" => "Learn about Lions Eye Hospital, Ghaziabad, our experienced eye care team, modern facilities, patient-focused approach and commitment to better vision.",
        "keywords" => "About Lions Eye Hospital, Lions Eye Hospital Ghaziabad, eye care specialists Ghaziabad, eye hospital Uttar Pradesh",
        "robots" => "index, follow"
    ],

    "blog.php" => [
        "title" => "Eye Care Blog | Health Tips & Eye Care Information | Lions Eye Hospital",
        "description" => "Explore useful eye care tips, cataract information, diabetic eye care, glaucoma, vision health and the latest eye care updates from Lions Eye Hospital, Ghaziabad.",
        "keywords" => "eye care blog, eye health tips, cataract information, diabetic eye care, glaucoma information, eye care Ghaziabad",
        "robots" => "index, follow"
    ],

    "contact-us.php" => [
        "title" => "Contact Lions Eye Hospital Ghaziabad | Book an Eye Consultation",
        "description" => "Contact Lions Eye Hospital, Ghaziabad for eye check-ups, cataract treatment, retina care, glaucoma diagnosis, diabetic eye care and other eye care services.",
        "keywords" => "Contact Lions Eye Hospital, eye hospital Ghaziabad contact, eye doctor Ghaziabad, eye consultation Ghaziabad",
        "robots" => "index, follow"
    ],

    "gallery.php" => [
        "title" => "Gallery | Lions Eye Hospital Ghaziabad",
        "description" => "Explore the Lions Eye Hospital Ghaziabad gallery featuring our hospital environment, facilities and eye care services.",
        "keywords" => "Lions Eye Hospital gallery, eye hospital Ghaziabad images, Lions Eye Hospital photos, eye care centre gallery",
        "robots" => "index, follow"
    ],

    "services.php" => [
        "title" => "Eye Care Services in Ghaziabad | Lions Eye Hospital",
        "description" => "Explore comprehensive eye care services at Lions Eye Hospital, Ghaziabad including diabetic care, retina surgery, cataract treatment, glaucoma diagnosis, eye check-ups and spectacles.",
        "keywords" => "eye care services Ghaziabad, eye treatment Ghaziabad, cataract, retina surgery, glaucoma, diabetic eye care, eye check up, spectacles",
        "robots" => "index, follow"
    ],

    "service-diabetic-eye-care.php" => [
        "title" => "Diabetic Eye Care in Ghaziabad | Lions Eye Hospital",
        "description" => "Lions Eye Hospital, Ghaziabad provides diabetic eye care and regular eye examinations to help detect and manage diabetes-related eye problems.",
        "keywords" => "diabetic eye care Ghaziabad, diabetic retinopathy Ghaziabad, diabetes eye check up, diabetic eye hospital",
        "robots" => "index, follow"
    ],

    "service-retina-surgery.php" => [
        "title" => "Retina Surgery in Ghaziabad | Lions Eye Hospital",
        "description" => "Get expert retina evaluation and surgical eye care at Lions Eye Hospital, Ghaziabad with experienced specialists and modern eye care facilities.",
        "keywords" => "retina surgery Ghaziabad, retina specialist Ghaziabad, retina treatment, eye surgery Ghaziabad, Lions Eye Hospital retina",
        "robots" => "index, follow"
    ],

    "service-cataract.php" => [
        "title" => "Cataract Treatment in Ghaziabad | Lions Eye Hospital",
        "description" => "Lions Eye Hospital, Ghaziabad provides cataract evaluation, diagnosis and treatment with experienced eye specialists and modern facilities.",
        "keywords" => "cataract treatment Ghaziabad, cataract surgery Ghaziabad, cataract specialist Ghaziabad, eye hospital for cataract",
        "robots" => "index, follow"
    ],

    "service-glaucoma-diagnosis.php" => [
        "title" => "Glaucoma Diagnosis in Ghaziabad | Lions Eye Hospital",
        "description" => "Lions Eye Hospital, Ghaziabad provides glaucoma diagnosis, eye examinations and ongoing care to help protect vision and support long-term eye health.",
        "keywords" => "glaucoma diagnosis Ghaziabad, glaucoma treatment Ghaziabad, glaucoma specialist, eye pressure test Ghaziabad",
        "robots" => "index, follow"
    ],

    "service-eye-check-up.php" => [
        "title" => "Eye Check Up in Ghaziabad | Lions Eye Hospital",
        "description" => "Get comprehensive eye check-ups at Lions Eye Hospital, Ghaziabad for vision assessment, early detection of eye conditions and better eye health.",
        "keywords" => "eye check up Ghaziabad, eye test Ghaziabad, eye examination Ghaziabad, vision test Ghaziabad, eye hospital",
        "robots" => "index, follow"
    ],

    "service-spectacles.php" => [
        "title" => "Spectacles & Vision Testing in Ghaziabad | Lions Eye Hospital",
        "description" => "Lions Eye Hospital, Ghaziabad provides professional vision testing and guidance for suitable spectacles based on your individual vision needs.",
        "keywords" => "spectacles Ghaziabad, eye testing Ghaziabad, vision testing, eyeglasses Ghaziabad, spectacles eye hospital",
        "robots" => "index, follow"
    ]

];

$defaultMeta = [
    "title" => "Lions Eye Hospital Ghaziabad | Comprehensive Eye Care",
    "description" => "Lions Eye Hospital, Ghaziabad provides comprehensive eye care with experienced specialists, modern facilities and patient-focused treatment.",
    "keywords" => "Lions Eye Hospital Ghaziabad, eye hospital, eye care, cataract, retina surgery, glaucoma, diabetic eye care, eye check up",
    "robots" => "index, follow"
];

// Get current page SEO data
$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

// Generate canonical URL
if ($currentPage === 'index.php') {

    $pageMeta['canonical'] = $siteUrl . '/';

} elseif ($pageMeta['robots'] === 'noindex, nofollow') {

    $pageMeta['canonical'] = '';

} else {

    $pageMeta['canonical'] = $siteUrl . '/' . $currentPage;

}

?>