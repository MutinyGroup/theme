wp.blocks.registerBlockType("ourblocktheme/banner", {
  title: "Banner",
  edit: EditComponent,
  save: SaveComponent
})

function EditComponent() {
  return (
    <div className="page-banner">
      <div className="page-banner__bg-image" style={{ backgroundImage: "url('')" }}></div>
      <div className="page-banner__content container ">
        <h1 className="headline headline--large">WCHODZIMY NA RYNEK Z MOCNYM</h1>
        <h2 className="headline headline--medium">UDERZENIEM</h2>
        <h3 className="headline headline--small">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        </h3>
        <a href="#" className="btn btn--large btn--blue">
          Find Your Major
        </a>
      </div>
    </div>
  )
}

function SaveComponent() {
  return <p>This is from our block.</p>
}
