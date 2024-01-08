type Props = {
    url: string
    className: string
    alt: string
}

export default function Url(props: Props) {
    return (
        <img src={props.url} alt={props.alt} className={props.className} />
    )
}
