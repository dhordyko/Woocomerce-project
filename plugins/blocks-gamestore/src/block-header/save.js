import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const { memberLink, cartLink } = attributes;
	return (
		<div {...useBlockProps.save()}>
			<header>
				<div className="inner-header">
					<InnerBlocks.Content />
					<div className="right-section">
						<div className="header-search">
							<i className="fa-solid fa-magnifying-glass"></i>
						</div>
						<div className="header-mode-switcher">
							{" "}
							<i className="fa-solid fa-sun"></i>
						</div>
						{cartLink && (
							<div className="header-cart-link">
								{" "}
								<a href={cartLink}>
									<i className="fa-solid fa-basket-shopping"></i>
								</a>
							</div>
						)}

						{memberLink && (
							<div className="header-member-link">
								<a href={memberLink}>Memeber Area</a>
							</div>
						)}
					</div>
				</div>
			</header>
		</div>
	);
}
