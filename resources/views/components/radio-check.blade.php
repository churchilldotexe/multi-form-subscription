
                    <input type="checkbox" id="service" name="service"
                        {{ session('addons.service') === 'service' || old('service') === 'service' || (!session('addons.service') || !old('service')) ? 'checked' : '' }} />
