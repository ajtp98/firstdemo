import { classNames, debounce } from '../utils/helpers';

const { forwardRef, useMemo } = wp.element;

const Input = (
	{
		disabled = false,
		className,
		inputClassName,
		error,
		name,
		validations,
		label,
		noBorder,
		height = '[42px]',
		labelColorClassName = 'text-heading-text',
		enableDebounce,
		onChange,
		prefixIcon,
		suffixIcon,
		enableAutoGrow = false,
		register,
		...props
	},
	ref
) => {
	const { ref: formHookRef, ...registerValidations } = useMemo( () => {
		return typeof register === 'function'
			? register( name, validations )
			: {};
	}, [ name, register, validations ] );

	return (
		<div className={ className }>
			{ label && (
				<label
					htmlFor={ name }
					className={ classNames(
						'sp-text-base font-medium text-heading-text',
						labelColorClassName
					) }
				>
					{ label }
					{ validations?.required && (
						<span className="text-alert-error"> *</span>
					) }
				</label>
			) }
			<div className="flex relative items-center">
				{ prefixIcon && (
					<div className={ `mr-3 h-${ height } flex items-center` }>
						{ prefixIcon }
					</div>
				) }
				<div
					className={ classNames(
						enableAutoGrow
							? 'relative overflow-hidden flex items-center'
							: 'w-full'
					) }
				>
					<input
						ref={ ( node ) => {
							if ( node && typeof formHookRef === 'function' ) {
								formHookRef( node );
							}
							if ( ! ref ) {
								return;
							}
							switch ( typeof ref ) {
								case 'function':
									ref( node );
									break;
								case 'object':
									ref.current = node;
									break;
								default:
									break;
							}
						} }
						name={ name }
						disabled={ disabled }
						className={ classNames(
							'w-full px-[1rem] placeholder:text-secondary-text rounded-md outline-none text-[0.9rem]',
							`h-${ height }`,
							label ? 'mt-2' : '',
							noBorder
								? 'bg-transparent'
								: 'px-3 border border-solid focus:ring-1 focus:ring-accent-st',
							enableAutoGrow && 'absolute left-0 min-w-[50px]',
							disabled ? 'cursor-not-allowed' : '',
							inputClassName,
							! noBorder && 'input-focus-border'
						) }
						style={ {
							borderColor:
								error && ! noBorder ? '#EF4444' : '#E5E7EB',
							boxShadow:
								error && ! noBorder
									? '0px 1px 1px 0px #EF4444, 0px 0px 0px 1px #EF4444'
									: '0px 1px 2px 0px rgba(0, 0, 0, 0.05)',
						} }
						onChange={
							enableDebounce
								? debounce( onChange, 500 )
								: onChange
						}
						{ ...props }
						{ ...registerValidations }
					/>
					{ enableAutoGrow && (
						<span className="invisible inline whitespace-pre text-[0.9rem] px-4">
							{ props.value || props.placeholder }
						</span>
					) }
				</div>
				{ suffixIcon && (
					<div className="absolute right-4 flex items-center">
						{ suffixIcon }
					</div>
				) }
			</div>
			{ error && (
				<div className="mt-1 text-sm text-alert-error ">
					{ error.message }
				</div>
			) }
		</div>
	);
};

export default forwardRef( Input );
