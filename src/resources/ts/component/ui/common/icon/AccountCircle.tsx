import AccountCircleIcon from '@mui/icons-material/AccountCircle';

type Props = {
    className: string
    size: string
}

export default function AccountCircle(props: Props){
    return (
        <AccountCircleIcon
            className={props.className}
            style={{
                fontSize: `${props.size}px`
            }}
        />
    )
}
