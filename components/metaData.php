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
    
    <meta property="og:url" content="<?php echo isset($ogUrl) ? $ogUrl : 'https://eliteengineeingservice.com/'; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?>">
    <meta name="twitter:description" content="Providing top-notch engineering, construction, and project management solutions for your industrial and commercial needs.">
	<?php if (isset($thumbnail)): ?>
		<meta name="twitter:image" content="<?php echo $thumbnail; ?>">
    <?php endif; ?>
    <!-- Canonical URL -->
	<link rel="canonical" href="<?php echo isset($canonicalUrl) ? $canonicalUrl : 'https://eliteengineeingservice.com/'; ?>">
	
    <!-- Favicon -->
    <!-- <link rel="icon" href="https://eliteengineeingservice.com/assets/images/favicon.ico" type="image/x-icon">-->

<?php if (isset($hasSchemaStructure)): ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php echo isset($organizationName) ? $organizationName : 'Elite Engineering Service'; ?>",
    "url": "<?php echo isset($organizationUrl) ? $organizationUrl : 'https://eliteengineeingservice.com/'; ?>",
    "logo": "<?php echo isset($organizationLogo) ? $organizationLogo : 'https://eliteengineeingservice.com/assets/images/logo.png'; ?>",
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