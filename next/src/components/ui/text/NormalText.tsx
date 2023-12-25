type Props = {
    className: string
    text: string
    fontSize: number
}

export default function NormalText({className, text, fontSize}: Props) {
    return (
        <div className={className} style={{fontSize: fontSize}}>{text}</div>
    )
}
