import { ChangeEvent, useState } from "react"

type Props = {
    className: string
    name: string
    initValue: string
    placeholder: string
    handleValueChange: (e: string) => void
}

export default function InputText({className, name, initValue, placeholder, handleValueChange}: Props) {
    const [value,setValue] = useState<string>(initValue)
    const handleInputChange = (e: ChangeEvent<HTMLInputElement>) => {
        const value = e.target.value
        handleValueChange(value)
        setValue(value)
    }

    return (
        <input
            type="text"
            className={className}
            name={name}
            value={value}
            placeholder={placeholder}
            onChange={handleInputChange}
        />
    )
}
