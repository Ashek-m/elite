    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Elite Engineering Service">
    <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Default description goes here.'; ?>">
    <meta name="keywords" content="<?php echo isset($metaKeywords) ? $metaKeywords : 'Default keywords here.'; ?>">
    <meta name="robots" content="index, follow">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?></title>

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?>">
    <meta property="og:description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Default description goes here.'; ?>">
	<?php if (isset($thumbnail)): ?>
        <meta property="og:image" content="<?php echo $thumbnail; ?>">
    <?php endif; ?>
    
    <meta property="og:url" content="<?php echo isset($ogUrl) ? $ogUrl : 'https://tncustomercaresupport.in/'; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?>">
    <meta name="twitter:description" content="Providing top-notch engineering, construction, and project management solutions for your industrial and commercial needs.">
	<?php if (isset($thumbnail)): ?>
		<meta name="twitter:image" content="<?php echo $thumbnail; ?>">
    <?php endif; ?>
    <!-- Canonical URL -->
	<link rel="canonical" href="<?php echo isset($canonicalUrl) ? $canonicalUrl : 'https://tncustomercaresupport.in/'; ?>">
	
    <!-- Favicon -->
    <!-- <link rel="icon" href="https://tncustomercaresupport.in/assets/images/favicon.ico" type="image/x-icon">-->
    <!-- Google Fonts - Exo 2 -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome for the phone icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16710783006"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16710783006');
</script>
    
<?php if (isset($hasSchemaStructure)): ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php echo isset($organizationName) ? $organizationName : 'Elite Engineering Service'; ?>",
    "url": "<?php echo isset($organizationUrl) ? $organizationUrl : 'https://tncustomercaresupport.in/'; ?>",
    "logo": "<?php echo isset($organizationLogo) ? $organizationLogo : 'https://tncustomercaresupport.in/assets/images/logo.png'; ?>",
    "description": "<?php echo isset($organizationDescription) ? $organizationDescription : 'Expert solutions in engineering, construction, and project management for industrial and commercial clients.'; ?>",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "<?php echo isset($contactTelephone) ? $contactTelephone : '+1-234-567-890'; ?>",
        "contactType": "<?php echo isset($contactType) ? $contactType : 'Customer Service'; ?>"
    },
    "sameAs": [
        <?php
        echo isset($socialLinks) && is_array($socialLinks) ? '"' . implode('", "', $socialLinks) . '"' : '"https://www.facebook.com/eliteengineering", "https://twitter.com/eliteengineering", "https://www.linkedin.com/company/eliteengineeringservice"';
        ?>
    ]
}
</script>
<?php endif; ?>